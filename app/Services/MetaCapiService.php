<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class MetaCapiService
{
    private $pixelId;
    private $accessToken;
    private $version = 'v19.0';

    public function __construct()
    {
        $this->pixelId = env('META_PIXEL_ID', '1442372837685960');
        $this->accessToken = env('META_ACCESS_TOKEN');
    }

    /**
     * Send event to Meta Conversions API
     */
    public function sendEvent($eventName, $userData = [], $customData = [], $eventId = null)
    {
        $url = "https://graph.facebook.com/{$this->version}/{$this->pixelId}/events";

        // Prepare User Data (Technical Identifiers)
        $payloadUserData = [
            'client_ip_address' => request()->ip(),
            'client_user_agent' => request()->header('User-Agent'),
            'fbc' => request()->cookie('_fbc') ?? $userData['fbc'] ?? null,
            'fbp' => request()->cookie('_fbp') ?? $userData['fbp'] ?? null,
            'external_id' => $userData['external_id'] ?? request()->cookie('sharesa_external_id') ?? null,
        ];

        // Add hashed PII from request
        if (isset($userData['em'])) {
            $payloadUserData['em'] = $this->hashEmail($userData['em']);
        }
        if (isset($userData['ph'])) {
            $payloadUserData['ph'] = $this->hashPhone($userData['ph']);
        }
        if (isset($userData['fn'])) {
            $payloadUserData['fn'] = $this->hashString($userData['fn']);
        }

        // Persistent Identity Retrieval (if missing from direct payload)
        if (!isset($payloadUserData['em']) && request()->cookie('sharesa_em')) {
            $payloadUserData['em'] = request()->cookie('sharesa_em');
        }
        if (!isset($payloadUserData['ph']) && request()->cookie('sharesa_ph')) {
            $payloadUserData['ph'] = request()->cookie('sharesa_ph');
        }

        $eventData = [
            'event_name' => $eventName,
            'event_time' => time(),
            'action_source' => 'website',
            'user_data' => array_filter($payloadUserData),
            'event_id' => $eventId ?? 'sharesa-' . strtolower($eventName) . '-' . time(),
        ];

        if (!empty($customData)) {
            $eventData['custom_data'] = $customData;
        }

        $payload = [
            'data' => [$eventData],
            'access_token' => $this->accessToken,
        ];

        try {
            $response = Http::post($url, $payload);

            if ($response->failed()) {
                Log::error("Meta CAPI Error: " . $response->body());
                return false;
            }

            return true;
        } catch (\Exception $e) {
            Log::error("Meta CAPI Exception: " . $e->getMessage());
            return false;
        }
    }

    /**
     * SHA-256 Hashing for Email
     */
    private function hashEmail($email)
    {
        if (empty($email)) return null;
        // Rules: trim, lower case, remove whitespace
        $clean = strtolower(trim($email));
        $clean = preg_replace('/\s+/', '', $clean);
        return hash('sha256', $clean);
    }

    /**
     * SHA-256 Hashing for Phone Number
     */
    private function hashPhone($phone)
    {
        if (empty($phone)) return null;
        // Rules: only numbers, must start with 62
        $clean = preg_replace('/[^0-9]/', '', $phone);
        
        // Convert leading 0 or 08 or +62 to 62
        if (str_starts_with($clean, '0')) {
            $clean = '62' . substr($clean, 1);
        } elseif (!str_starts_with($clean, '62')) {
            $clean = '62' . $clean;
        }
        
        return hash('sha256', $clean);
    }

    /**
     * SHA-256 Hashing for General Strings (First Name, etc)
     */
    private function hashString($data)
    {
        if (empty($data)) return null;
        return hash('sha256', strtolower(trim($data)));
    }
}

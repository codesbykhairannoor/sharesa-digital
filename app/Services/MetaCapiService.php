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

        // Prepare User Data
        $payloadUserData = [
            'client_ip_address' => request()->ip(),
            'client_user_agent' => request()->header('User-Agent'),
            'fbc' => request()->cookie('_fbc') ?? $userData['fbc'] ?? null,
            'fbp' => request()->cookie('_fbp') ?? $userData['fbp'] ?? null,
            'external_id' => $userData['external_id'] ?? request()->cookie('sharesa_external_id') ?? null,
        ];

        // Add additional PII if available (Hashed using SHA-256)
        if (isset($userData['em'])) {
            $payloadUserData['em'] = $this->hashData($userData['em']);
        }
        if (isset($userData['fn'])) {
            $payloadUserData['fn'] = $this->hashData($userData['fn']);
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
     * SHA-256 Hashing for Meta compliant data
     */
    private function hashData($data)
    {
        if (empty($data)) return null;
        return hash('sha256', strtolower(trim($data)));
    }
}

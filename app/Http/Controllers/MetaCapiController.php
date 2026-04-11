<?php

namespace App\Http\Controllers;

use App\Services\MetaCapiService;
use Illuminate\Http\Request;

class MetaCapiController extends Controller
{
    protected $metaService;

    public function __construct(MetaCapiService $metaService)
    {
        $this->metaService = $metaService;
    }

    /**
     * Handle tracking requests from frontend
     */
    public function track(Request $request)
    {
        $request->validate([
            'event_name' => 'required|string',
            'event_id' => 'required|string',
            'user_data' => 'nullable|array',
            'custom_data' => 'nullable|array',
        ]);

        $eventName  = $request->input('event_name');
        $eventId    = $request->input('event_id');
        $userData   = $request->input('user_data', []);
        $customData = $request->input('custom_data', []);

        // Send to Meta CAPI
        $result = $this->metaService->sendEvent($eventName, $userData, $customData, $eventId);

        return response()->json([
            'success' => $result,
            'event_id' => $eventId
        ]);
    }
}

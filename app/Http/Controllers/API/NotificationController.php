<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function payment(Request $request)
    {
        $request = $request->toArray();
        Log::info("callback midtrans payment", $request);
    }
}

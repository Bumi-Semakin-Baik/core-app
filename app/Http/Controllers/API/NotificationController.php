<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NotificationController extends Controller
{
    public function payment(Request $request)
    {
        Log::info("callback midtrans payment", $request);
        $request = $request->toArray();
    }
}

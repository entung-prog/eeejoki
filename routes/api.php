<?php
use Illuminate\Support\Facades\Route; use App\Http\Resources\OrderResource; use App\Models\Order;
Route::middleware('auth:sanctum')->get('/orders/{order}', fn(Order $order)=>new OrderResource($order->load(['customer','worker','progressUpdates'])));

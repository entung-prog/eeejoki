<?php
use App\Data\OrderData; use App\Enums\OrderPriority; use App\Enums\OrderStatus; use App\Models\User; use App\Services\OrderService; use Illuminate\Foundation\Testing\RefreshDatabase;
uses(RefreshDatabase::class);
it('creates a waiting payment order with a business order code', function(){ $customer=User::factory()->create(); $order=app(OrderService::class)->create(new OrderData($customer->id,'Research paper','Detailed brief',now()->addWeek()->toDateTimeString(),OrderPriority::High,500000)); expect($order->order_code)->toStartWith('EEE-')->and($order->status)->toBe(OrderStatus::WaitingPayment); });

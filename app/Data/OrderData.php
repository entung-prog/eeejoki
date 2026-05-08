<?php
namespace App\Data; use App\Enums\OrderPriority; final readonly class OrderData { public function __construct(public int $customerId, public string $title, public string $description, public string $deadline, public OrderPriority $priority, public float $totalPrice, public ?int $workerId = null, public float $workerFee = 0) {} }

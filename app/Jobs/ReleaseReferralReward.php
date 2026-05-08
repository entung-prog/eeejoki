<?php
namespace App\Jobs; use App\Models\Order; use App\Services\ReferralService; use Illuminate\Contracts\Queue\ShouldQueue; use Illuminate\Foundation\Queue\Queueable; class ReleaseReferralReward implements ShouldQueue { use Queueable; public function __construct(public Order $order) {} public function handle(ReferralService $referrals): void { $referrals->rewardFor($this->order); } }

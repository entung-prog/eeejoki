<?php
namespace App\Enums;
enum AffiliateTier: string { case Bronze='bronze'; case Silver='silver'; case Gold='gold'; public function commissionRate(): float { return match($this) { self::Bronze => 0.05, self::Silver => 0.07, self::Gold => 0.10 }; } }

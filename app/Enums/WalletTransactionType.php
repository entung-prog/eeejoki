<?php
namespace App\Enums;
enum WalletTransactionType: string { case Cashback='cashback'; case ReferralReward='referral_reward'; case Withdrawal='withdrawal'; case PaymentDeduction='payment_deduction'; }

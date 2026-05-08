<?php
namespace App\Models;

use App\Enums\UserRole;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, HasRoles, Notifiable;
    protected $fillable = ['name','email','phone','password','role','referral_code','referred_by','wallet_balance','affiliate_tier'];
    protected $hidden = ['password','remember_token'];
    protected function casts(): array { return ['password' => 'hashed', 'role' => UserRole::class, 'wallet_balance' => 'decimal:2']; }
    public function referredBy(): BelongsTo { return $this->belongsTo(self::class, 'referred_by'); }
    public function referrals(): HasMany { return $this->hasMany(Referral::class, 'referrer_id'); }
    public function customerOrders(): HasMany { return $this->hasMany(Order::class, 'customer_id'); }
    public function workerOrders(): HasMany { return $this->hasMany(Order::class, 'worker_id'); }
    public function walletTransactions(): HasMany { return $this->hasMany(WalletTransaction::class); }
    public function notifications(): HasMany { return $this->hasMany(Notification::class); }
}

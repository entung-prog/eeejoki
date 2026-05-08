<?php
namespace App\Models;
use App\Enums\{OrderPriority, OrderStatus};
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\{BelongsTo, HasMany};
class Order extends Model { use HasFactory; protected $fillable=['order_code','customer_id','worker_id','title','description','deadline','priority','status','total_price','worker_fee','revision_count','completed_at']; protected function casts(): array { return ['deadline'=>'datetime','completed_at'=>'datetime','priority'=>OrderPriority::class,'status'=>OrderStatus::class,'total_price'=>'decimal:2','worker_fee'=>'decimal:2']; } public function customer(): BelongsTo { return $this->belongsTo(User::class,'customer_id'); } public function worker(): BelongsTo { return $this->belongsTo(User::class,'worker_id'); } public function files(): HasMany { return $this->hasMany(OrderFile::class); } public function progressUpdates(): HasMany { return $this->hasMany(ProgressUpdate::class); } public function payments(): HasMany { return $this->hasMany(Payment::class); } public function payouts(): HasMany { return $this->hasMany(WorkerPayout::class); } }

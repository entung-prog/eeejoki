<?php
namespace App\Models; use Illuminate\Database\Eloquent\Factories\HasFactory; use Illuminate\Database\Eloquent\Model; use Illuminate\Database\Eloquent\Relations\BelongsTo; class Chat extends Model { use HasFactory; protected $fillable=['room_id','sender_id','message','attachment_url']; public function sender(): BelongsTo { return $this->belongsTo(User::class,'sender_id'); } }

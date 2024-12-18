<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotificationUser extends Model
{
    use HasFactory;

    protected $fillable = ['notification_id', 'user_id', 'seen', 'date_seen'];

    public function notification()
    {
        return $this->belongsTo(Notification::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id')->without('users');
    }
}
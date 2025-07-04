<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhoneOrdersLog extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'searched_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobSeeker extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'notice_period',
        'year_of_exp'
    ];

    public function user() {
        $this->belongsTo(User::class);
    }
}

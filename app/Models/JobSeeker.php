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
        return $this->belongsTo(User::class);
    }

    public function educations() {
        return $this->hasMany(Education::class);
    }

    public function skills() {
        return $this->hasMany(Skill::class);
    }

    public function experiences() {
        return $this->hasMany(Experience::class);
    }
}

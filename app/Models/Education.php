<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_seeker_id',
        'title',
        'institute',
        'start_year',
        'pass_year',
        'result'
    ];

    public function jobSeeker() {
        $this->belongsTo(JobSeeker::class);
    }

}

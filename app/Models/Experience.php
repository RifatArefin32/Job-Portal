<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_seeker_id',
        'title',
        'description',
        'org_name',
        'start',
        'end'
    ];

    public function jobSeeker() {
        return $this->belongsTo(JobSeeker::class);
    }
}

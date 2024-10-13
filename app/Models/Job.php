<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
            'title',
            'description',
            'responsibilities',
            'requirements',
            'min_salary',
            'max_salary',
            'benefits',
            'job_type',
            'location'
    ];

    public function employer() {
        return $this->belongsTo(Employer::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'org_name',
        'org_details',
        'org_size',
        'org_address1',
        'org_address2',
        'org_address3',
        'org_url'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}

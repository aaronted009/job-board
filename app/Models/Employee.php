<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'address',
        'city',
        'state',
        'country',
        'job_title',
        'department',
        'salary',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $table = "jobs";

    protected $fillable = [
        'name','company_ID','department_ID','memo'
    ];
}

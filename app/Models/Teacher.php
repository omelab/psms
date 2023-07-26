<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'teachers_code',
        'name',
        'designation',
        'present_address',
        'district',
        'gender',
        'marital_status',
        'date_of_birth',
        'education',
        'department',
        'email',
        'mobile',
        'notes',
        'joining_date',
        'picture',
        'status'
    ]; 
}

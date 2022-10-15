<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'empno', 'nicno', 'lname', 'fname','address', 'email',
        'designation', 'branch', 'department', 'ministry',
        'apdate', 'dob','phno', 'image', 'git'
    ];
}

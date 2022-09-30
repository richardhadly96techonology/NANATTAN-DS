<?php

namespace App\Models;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\Table as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    protected $fillable = [
        'empno', 'nicno', 'lname', 'fname','address', 'email',
        'designation', 'branch', 'department', 'ministry',
        'apdate', 'dob','phno', 'image'
    ];

     
}

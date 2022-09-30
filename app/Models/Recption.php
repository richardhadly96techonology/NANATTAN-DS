<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recption extends Model
{
    use HasFactory;
    protected $fillable = [

        'table_id','name', 'nicno', 'address', 'email', 'dsdivsion', 'branch', 'created_at', 'updated_at'
    ];


    public function table()
    {
        return $this->belongsTo(Table::class, 'table_id');
    }

     
}

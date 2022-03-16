<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administrator extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_administrator',
        'cellphone',
        'email',
        'father_lastname',
        'mother_lastname',
        'name',
        'password'
    ];

    protected $hidden = [
        'password'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    use HasFactory;

    public function products() {
        return $this->hasMany(product::class, 'id_product');
    }

    protected $fillable = [
        'id_supplier',
        'name_supplier'
    ];
}

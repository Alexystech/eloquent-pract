<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    public function categories() {
        return $this->belongsTo(category::class, 'id_category');
    }

    public function suppliers() {
        return $this->belongsTo(supplier::class, 'id_supplier');
    }

    protected $fillable = [
        'id_product',
        'amount',
        'name',
        'price',
        'fk_id_category',
        'fk_id_supplier',
    ];

}

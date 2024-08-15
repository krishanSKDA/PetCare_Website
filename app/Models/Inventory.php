<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_name',
        'product_picture',
        'quantity_in_stock',
        'reorder_level',
        'reorder_quantity',
        'cost_per_unit',
        'selling_price',
        'profit',
        'last_restocked_date',
        'expiration_date',
        'type',
        'status',
    ];
}

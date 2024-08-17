<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'contact number',
        'products',
        'payment method',
        'cost',
        'address',
        'created_at',
        'shipping status'
    ];
}

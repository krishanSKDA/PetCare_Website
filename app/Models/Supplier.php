<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_name',
        'contact_person',
        'email',
        'phone_number',
        'address',
        'website',
        'product_types',
        'is_active',
        'notes',
    ];

    // If you want to set the table name manually (optional)
    protected $table = 'suppliers';

    // Cast attributes to a specific data type
    protected $casts = [
        'is_active' => 'boolean',
    ];
}

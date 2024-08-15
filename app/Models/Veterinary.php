<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veterinary extends Model
{
    use HasFactory;

      // Specify which attributes can be mass-assigned
      protected $fillable = [
        'name',
        'specialization',
        'license_number',
        'email',
        'phone_number',
        'address',
        'profile_picture',
        'bio',
    ];

    // If you want to set the table name manually (optional)
    protected $table = 'veterinaries';

    
}

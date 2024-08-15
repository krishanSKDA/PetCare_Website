<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetOwner extends Model
{
    use HasFactory;

     // Specify which attributes can be mass-assigned
     protected $fillable = [
        'pet_owner_id',
        'petowners_name',
        'petowners_address',
        'petowners_phone',
        'petowners_email',
    ];

    // If you want to set the table name manually (optional)
    protected $table = 'pet_owners';

}

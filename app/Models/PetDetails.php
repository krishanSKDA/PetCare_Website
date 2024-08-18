<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'pet_name',
        'pet_breed',
        'pet_gender',
        'date_of_birth',
        'pet_picture',
    ];

    protected $table = 'pet_details';

    protected $casts = [
        'date_of_birth' => 'date',
    ];
}

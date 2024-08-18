<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'petowner_name',
        'pet_name',
        'pet_type',
        'appointment_date',
        'appointment_time',
        'petowner_email',
        'phone_number',
        'service_required',
    ];

    // Cast attributes to a specific data type
    protected $casts = [
        'appointment_date' => 'date',
        'appointment_time' => 'string',
    ];

    // If you want to set the table name manually (optional)
    protected $table = 'appointments';

   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vaccinations extends Model
{
    use HasFactory;
    protected $fillable = [
        'vaccine_name',
        'vaccination_exp_date',
        'vaccine_manufacture',
        'batch_number',
        'date_administered',
        'next_due_date',
        'dosage',
        'administration_method',
        'notes',
    ];
    protected $table = 'vaccinations';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamentos extends Model
{
    use HasFactory;

	protected $fillable = [
        'name',
        'tel',
        'origin',
        'dt_ctt',
        'observation',
    ];
}

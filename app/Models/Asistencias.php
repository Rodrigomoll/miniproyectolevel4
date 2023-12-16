<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class asistencias extends Model
{
    use HasFactory;
    protected $table = 'asistencias';

    protected $fillable = [
        'id_matricula',
        'fecha',
        'estado',
    ];
}

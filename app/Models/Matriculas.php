<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class matriculas extends Model
{
    use HasFactory;
    protected $table = 'matriculas';

    protected $fillable = [
        'id_alumno',
        'id_curso'
    ];
}

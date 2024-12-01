<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table  = 'usuarios';
    protected $fillable = [
        'Telefono',
        'Imagen',
        'Ciudad',
        'Dirección',
        'Descripción',
        'Titulo1',
        'Fecha_Titulo1',
        'Titulo2',
        'Fecha_Titulo2',
        'Experiencia'
    ];
}

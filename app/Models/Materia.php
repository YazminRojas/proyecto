<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'NombreMateria','ClaveMateria','DocenteMateria', 'ApellidoPaterno','ApellidoMaterno','Edificio','Salon'
    ];
}
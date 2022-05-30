<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compartir extends Model
{
    use HasFactory;
    protected $fillable = [
        'NombreArchivo'
    ];
}

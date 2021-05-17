<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dieta extends Model
{
    use HasFactory;

    protected $table = 'dieta';

    protected $fillable = [
                'Comida',
                'Calorias',
                'Grasas',
                'Carbohidratos',
                'Proteinas',
                'created_at',
                'updated_at',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class centros_consumo_detalles extends Model
{
    use HasFactory;
    protected $table = 'centros_consumo_detalles';
    protected $fillable = [
        'centro_consumo_id',
        'hotel_id',
        'destacado',
    ];
}

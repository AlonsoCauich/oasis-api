<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hoteles extends Model
{
    use HasFactory;
    protected $table = 'hoteles';
    protected $fillable = [
        'nombre',
        'clave',
        'propiedad_id',
    ];
}

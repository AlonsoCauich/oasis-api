<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propiedades extends Model
{
    use HasFactory;
    protected $table = 'propiedades';
    protected $fillable = [
        'nombre',
        'url',        
    ];
}

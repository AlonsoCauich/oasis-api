<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locaciones extends Model
{
    use HasFactory;
    protected $table = 'locaciones';
    protected $fillable = [
        'locacion',
        'hotel_id',      
    ];
}

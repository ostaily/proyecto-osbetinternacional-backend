<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo de la tabla colores
 */
class colores extends Model
{
    use HasFactory;
    protected $table = 'colores';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

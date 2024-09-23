<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modelo de la tabla clientes
 */
class clientes extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ventas_detalles extends Model
{
    use HasFactory;
    protected $table = 'ventas_detalles';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;

}

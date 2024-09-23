<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactos_telefonos extends Model
{
    use HasFactory;
    protected $table = 'contactos_telefonos';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

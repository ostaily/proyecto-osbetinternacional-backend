<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contactos extends Model
{
    use HasFactory;
    protected $table = 'contactos';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

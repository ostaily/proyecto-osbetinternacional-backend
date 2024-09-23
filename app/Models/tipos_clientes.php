<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_clientes extends Model
{
    use HasFactory;
    protected $table = 'tipos_clientes';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;

}

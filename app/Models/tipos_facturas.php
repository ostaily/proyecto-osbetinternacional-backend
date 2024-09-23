<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_facturas extends Model
{
    use HasFactory;
    protected $table = 'tipos_facturas';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;

}

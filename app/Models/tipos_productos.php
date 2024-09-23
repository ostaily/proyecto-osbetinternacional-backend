<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_productos extends Model
{
    use HasFactory;
    protected $table = 'tipos_productos';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;

}

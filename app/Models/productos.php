<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;
    protected $table = 'productos';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

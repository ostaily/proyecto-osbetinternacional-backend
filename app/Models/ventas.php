<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ventas extends Model
{
    use HasFactory;
    protected $table = 'Ventas';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;


}

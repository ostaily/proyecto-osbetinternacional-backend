<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class impuestos extends Model
{
    use HasFactory;
    protected $table = 'impuestos';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tallas extends Model
{
    use HasFactory;
    protected $table = 'tallas';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;

}

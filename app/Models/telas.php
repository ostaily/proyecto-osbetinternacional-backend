<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class telas extends Model
{
    use HasFactory;
    protected $table = 'telas';
    protected $fillable = ["*"];
    protected $primaryKey = 'id';
    public $timestamps = false;

}

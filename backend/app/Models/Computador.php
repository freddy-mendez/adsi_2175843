<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $fillable = ['codigo', 'marca', 'serial', 'SO', 'ram_gb'];
}

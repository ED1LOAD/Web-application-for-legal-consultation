<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qcard extends Model
{
    use HasFactory;

    protected $fillable = ['name' ,'question','date'];
}

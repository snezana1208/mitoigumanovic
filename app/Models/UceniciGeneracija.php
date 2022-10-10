<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UceniciGeneracija extends Model
{
    use HasFactory;

    protected $table = 'ucenici_generacija';

    protected $fillable = ['title', 'body'];
}

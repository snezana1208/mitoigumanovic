<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vesti extends Model
{
    use HasFactory;

    protected $table = 'vesti';

    protected $fillable = ['title', 'body'];
}

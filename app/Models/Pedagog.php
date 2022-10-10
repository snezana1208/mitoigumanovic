<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedagog extends Model
{
    use HasFactory;

    protected $table = 'pedagog';

    protected $fillable = ['title', 'body'];
}

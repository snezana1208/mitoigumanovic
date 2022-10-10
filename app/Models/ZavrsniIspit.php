<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ZavrsniIspit extends Model
{
    use HasFactory;

    protected $table = 'zavrsni_ispit';

    protected $fillable = ['title', 'body'];
}


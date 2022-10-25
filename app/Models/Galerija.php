<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Galerija extends Model
{
    use HasFactory;

    protected $table = 'galerija';

    protected $fillable = ['name'];
}

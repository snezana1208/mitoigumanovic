<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UpisPrvaka extends Model
{
    use HasFactory;

    protected $table = 'upis_prvaka';

    protected $fillable = ['title', 'body'];
}

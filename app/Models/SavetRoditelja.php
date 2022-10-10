<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavetRoditelja extends Model
{
    use HasFactory;

    protected $table = 'savet_roditelja';

    protected $fillable = ['title', 'body'];
}

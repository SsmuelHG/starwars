<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Starwars extends Model
{
    use HasFactory;
    protected $table = 'personaje';
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preventions extends Model
{
    use HasFactory;

    protected $table = 'preventions';
    protected $fillable = [
        'id',
        'name',
        'refer',
    ];
}

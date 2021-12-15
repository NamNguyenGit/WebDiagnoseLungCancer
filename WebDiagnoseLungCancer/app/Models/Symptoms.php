<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Symptoms extends Model
{
    use HasFactory;

    protected $table = 'symptoms';
    protected $fillable = [
        'id',
        'name',
        'refer',
    ];
}

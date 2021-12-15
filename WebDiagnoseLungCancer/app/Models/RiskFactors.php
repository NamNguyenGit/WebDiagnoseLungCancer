<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RiskFactors extends Model
{
    use HasFactory;

    protected $table = 'riskfactors';
    protected $fillable = [
        'id',
        'name',
        'refer',
    ];
}

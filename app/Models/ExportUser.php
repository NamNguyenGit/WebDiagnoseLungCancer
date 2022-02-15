<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportUser extends Model
{
    use HasFactory;

    protected $table = 'excelfile';
    protected $fillable = [
        
        'name',
        'symptoms',
        'phone',
        'email'
    ];

   
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExportUser extends Model
{
    use HasFactory;

    protected $table = 'excelfile';
    protected $fillable = [
        
        'user_id',
        

    ];

    public function joinUser()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}

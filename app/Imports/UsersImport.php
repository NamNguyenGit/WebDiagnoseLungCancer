<?php

namespace App\Imports;

use App\Models\ExportUser;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExportUser([

            'user_name' => $row[0],
            'symptoms' => $row[1],
            'phone' => $row[2],
           
        ]);
    }
}

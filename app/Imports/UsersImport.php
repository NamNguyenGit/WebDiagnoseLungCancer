<?php

namespace App\Imports;

use App\Models\ExportUser;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Throwable;

class UsersImport implements ToModel , WithHeadingRow ,WithBatchInserts, WithChunkReading
{
    use Importable ;
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ExportUser([
            
            'name' => $row['name'],
            'symptoms' => $row['symptoms'],
            'phone' => $row['phone'],
            'email' => $row['email'],
        ]);
    }

    //limit the amount of queries
    public function batchSize(): int
    {
        return 1000;
    }

    //load the entire sheet into memory.
    public function chunkSize(): int
    {
        return 1000;
    }

    
}

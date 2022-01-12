<?php

namespace App\Exports;

use App\Models\ExportUser;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithMapping;

class UsersExport implements FromCollection, Responsable , ShouldAutoSize , WithMapping
{
    use Exportable;
    private $fileName = "User.xlsx";
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ExportUser::all();
    }
    public function map($exportuser): array
    {
        return [
            $exportuser -> id ,
            $exportuser -> user_id
        ];
    }
}

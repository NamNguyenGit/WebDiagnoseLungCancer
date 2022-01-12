<?php

namespace App\Exports;

use App\Models\ExportUser;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class UsersExport implements
    FromCollection,
    Responsable,
    ShouldAutoSize,
    WithMapping,
    WithHeadings,
    WithEvents
{
    use Exportable;
    private $fileName = "User.xlsx";
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return  ExportUser::with('joinUser')->get();
       
    }
    public function map($exportuser): array
    {
        return [
            $exportuser -> id ,
            $exportuser -> joinUser -> name,
            
        ];
    }

    public function headings(): array
    {
       return [
            'ID',
            "Patient's name"
       ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event -> sheet -> getStyle('A1:B1')->applyFromArray([
                    'font' => [
                        'bold' => true
                    ],
                    'borders' => [
                        'outline' => [
                            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THICK,
                            'color' => ['argb' => '020101'],
                        ],
                    ]
                    ]);
            }
        ];
    }
}

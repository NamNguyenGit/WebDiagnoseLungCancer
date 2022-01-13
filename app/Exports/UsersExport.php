<?php

namespace App\Exports;

use App\Models\ExportUser;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Events\AfterSheet;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class UsersExport implements
  
    Responsable,
    ShouldAutoSize,
   
    WithHeadings,
    WithEvents,
    FromArray
{
    use Exportable;
    private $fileName = "User.xlsx";
    /**
    * @return \Illuminate\Support\Collection
    */
    public function array(): array
    {
        return[
            ['Nguyen Van A', 'Cough','0123456789']
        ];
    }
    
   

    public function headings(): array
    {
       return [
            
            "Name",
            "Symptoms",
            "Phone",
       ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
                $event -> sheet -> getStyle('A1:D2')->applyFromArray([
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

<?php

namespace App\Exports;

use App\Models\Scholar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithTitle;
use App\Http\Resources\ExportResource;
use Maatwebsite\Excel\Events\AfterSheet;
use PhpOffice\PhpSpreadsheet\Cell\DataValidation;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Resources\Report\ScholarResource;

class ScholarExport implements FromCollection, WithHeadings, WithStyles, WithTitle, WithEvents
{
    public $rowCount = 0;
    public function collection()
    {
        $data = Scholar::with('status')->with('profile.user')
        ->with('address.municipality.province.region')
        ->with('education.school.school','education.course')->get();

        return ScholarResource::collection($data);
    }

    public function headings(): array
    {
        return [
            "Year of Award","No.","Name","Year Level","School","Course","Started","Status"
        ];
    }

    public function styles(Worksheet $sheet)
    {
        $count = Scholar::count();

        return [
            '1:'.$count => [
                'border' => [
                    'outline' => [
                        'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                        'color' => ['argb' => '000000'],
                    ],    
                ],
            ],
            1 => [
                'font' => ['bold' => true], 
                'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER],
                'fill' =>[
                    'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                    'color' => ['argb' => 'FF87CEEB'],
                ],
                'sizeAutoSize' => true
            ],
            '2:'.$count+1 => [
                'alignment' => ['horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_CENTER,
                                'vertical' => \PhpOffice\PhpSpreadsheet\Style\Alignment::VERTICAL_CENTER],
            ],
        ];
    }

    public function title(): string
    {
        return 'Scholars';
    }

    public function registerEvents(): array
    {   
        return [
            AfterSheet::class => function (AfterSheet $event) {
               
                $event->sheet->getRowDimension(1)->setRowHeight(25);
                $event->sheet->getColumnDimension('A')->setWidth(15);
                $event->sheet->getColumnDimension('B')->setWidth(10);
                $event->sheet->getColumnDimension('C')->setWidth(30);
                $event->sheet->getColumnDimension('D')->setWidth(12);
                $event->sheet->getColumnDimension('E')->setWidth(15);
                $event->sheet->getColumnDimension('F')->setWidth(15);
                $event->sheet->getColumnDimension('G')->setWidth(15);
                $event->sheet->getColumnDimension('H')->setWidth(20);
                
                // $event->sheet->getStyle('E2')->getAlignment()->setVertical('center');
   
             
                $spreadsheet = $event->sheet;
                
                
                $event->sheet->getStyle('A1:H1')->applyFromArray(array(
                    ['font' => array('size'=>10,'bold'=>true)],
                    ['fill' => array('color' => array('rgb' => 'b2e0e3'))]
                ));

               
            }
        ];
    }
}

<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use App\Models\TKuisoner;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithTitle;
use Maatwebsite\Excel\Events\AfterSheet;

class KuisonerReport implements WithTitle, WithHeadings, WithEvents, FromCollection
{
    /**
     * @return \Illuminate\Support\Collection
     */
    // public function view(): View
    // {
    //     $kuisoner = TKuisoner::get();
    //     $columnKuisoner = collect(TKuisoner::first())->keys();
    //     return view("page.kuisoner.report", compact("kuisoner", "columnKuisoner"));
    // }
    /**
     * @return array
     */
    public function registerEvents(): array
    {
        $styleArray = [
            'font' => [
                'bold' => true,
            ],
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                    'color' => ['argb' => 'ffffff'],
                ],
            ],
            'fill' => [
                'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
                'startColor' => [
                    'rgb' => 'a7ff83',
                ]
            ],
        ];

        return [
            // Handle by a closure.
            AfterSheet::class => function (AfterSheet $event) use ($styleArray) {
                // $event->sheet->insertNewRowBefore(7, 2);
                // $event->sheet->insertNewColumnBefore('A', 2);
                $event->sheet->getStyle('A1:EH1')->applyFromArray($styleArray);
                // $event->sheet->setCellValue('E27', '=SUM(E2:E26)');
            },
        ];
    }

    public function collection()
    {
        return TKuisoner::all();
    }
    public function headings(): array
    {
        return
            collect(TKuisoner::first())->keys()->toArray();
    }

    /**
     * @return string
     */
    public function title(): string
    {
        return 'Tkuisoner';
    }
}

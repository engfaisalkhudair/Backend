<?php

namespace App\Exports;

use App\Models\Dress;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Illuminate\Contracts\View\View;

class sersxport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    use Exportable;

    public function  view(): View
    {
        return view('export.FileExport' , [
            'dress' => Dress::all()
        ]);
    }
}

<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PdfSurat extends Controller
{
    public function Suratppb($id)
    {
        $ppb = DB::table('permohonan_pasang_barus')->find($id);
        return view('pdf-cetak.permohonan-pasang-baru', compact('ppb'));
    }

}


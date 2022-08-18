<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\permohonan_pasang_barus;

class CetakDanHistory extends Controller
{
    public function index()
    {
        $ppb=DB::table('permohonan_pasang_barus')->orderBy('updated_at','DESC')->get();

        return view('CetakDanHistory', compact('ppb'));
    }

    public function hapussuratpsb($id)
    {
        $ppb=DB::table('permohonan_pasang_barus')->where('id',$id)->delete();

        return redirect()->route('cetakhistory');
    }

}


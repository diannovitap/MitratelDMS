<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dashboard extends Controller
{
    public function index()
    {
        $ppb=DB::table('permohonan_pasang_barus')->count('id');
        $kep=DB::table('kepadayths')->count('id');
        $totalsurat = ($ppb + $kep);
        return view('dashboard', compact('totalsurat'));
    }
}

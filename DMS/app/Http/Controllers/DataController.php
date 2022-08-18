<?php

namespace App\Http\Controllers;

use App\kepadayths;
use App\pst;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DataController extends Controller
{
    public function index()
    {
        $kepadayth=DB::table('kepadayths')->orderByDesc('updated_at','DESC')->get();
        $pst=DB::table('psts')->orderByDesc('updated_at')->get();
        return view('datasurat', compact('kepadayth','pst'));
    }

    public function kepadainput(Request $request)
    {
        $request->validate([
            'kepadayth' => 'required',
        ]);

        $inputkepada = new kepadayths();
        $inputkepada->kepadayth = $request->kepadayth;

       if ($inputkepada->save()) {
        return response()->json(data: 'sukses', status: '201');
       }else {
        return response()->json(data: 'filed', status: '401');
       }
       return view('datasurat');
    }


    public function pstinput(Request $request)
    {
        $request->validate([
            'pst' => 'required',
        ]);

        $inputpst = new pst();
        $inputpst->pst = $request->pst;


       if ($inputpst->save()) {
        return response()->json(data: 'sukses', status: '201');
       }else {
        return response()->json(data: 'filed', status: '401');
       }
       return view('datasurat');
    }

}

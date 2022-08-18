<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\permohonan_pasang_baru;

class createSuratController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kepadayth=DB::table('kepadayths')->get();
        $pst=DB::table('psts')->get();
        return view('createsurat', compact('kepadayth','pst'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomorSurat'  => 'required',
            'tujuan'  => 'required',
            'pst'  => 'required',
            'namaPelanggan'  => 'required',
            'IDpelanggan'  => 'required',
            'idSite'  => 'required',
            'namaSite'  => 'required',
            'alamat'  => 'required',
            'keterangan'  => 'required',
            'tagihanlistrik'  => 'required',
        ]);


        $inputppbl = permohonan_pasang_baru::create([
            'nomorSurat' => $request['nomorSurat'],
            'tujuan' => $request['tujuan'],
            'pst' => $request['pst'],
            'namaPelanggan' => $request['namaPelanggan'],
            'IDpelanggan' => $request['IDpelanggan'],
            'idSite' => $request['idSite'],
            'namaSite' => $request['namaSite'],
            'alamat' => $request['alamat'],
            'keterangan' => $request['keterangan'],
            'tagihanlistrik' => $request['tagihanlistrik'],
        ]);
        return redirect('cetakhistory');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

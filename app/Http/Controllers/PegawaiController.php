<?php

namespace App\Http\Controllers;

use App\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pegawai = Pegawai::all();
        

        return view('pages.pegawai', compact('pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tambahdata');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai = new Pegawai();
        $pegawai->nama = $request->np;
        $pegawai->nip = $request->nip;
        $pegawai->jabatan = $request->jbt;
        $pegawai->periode = $request->pk;
        $pegawai->unit = $request->uk;
        $pegawai->group = $request->gd;
        $pegawai->atasan1_id = 1;
        $pegawai->atasan2_id = 1;

        $pegawai->save();

     
        // $tambahdata->nama1 = $request->na1;
        // $tambahdata->nip = $request->nip1;
        // $tambahdata->jabatan = $request->jbt1;
        // $tambahdata->nama1 = $request->na2;
        // $tambahdata->nip = $request->nip2;
        // $tambahdata->jabatan = $request->jbt2;
        return redirect()->back()->with('success', 'Data Pegawai telah ditambah');//
     
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
        $pegawai = Pegawai::where('nip', $id)->first();

        return view('pages.datadiri', compact('pegawai'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pegawai = Pegawai::find($id);

        return redirect('pages.pegawai', compact('pegawai')); //
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
        $pegawai = Pegawai::find($id);
        $pegawai->edit();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pegawai = Pegawai::find($id);

        $pegawai->delete();

        return redirect('pages.pegawai')->with('success', 'Berhasil Menghapus Data'); //
    }
}

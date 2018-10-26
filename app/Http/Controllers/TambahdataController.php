<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Tambahdata;
use App\Pegawai;

class TambahdataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tambahdata = Tambahdata::all();

        return view ('tambahdata', ['Tambahdata' => $tambahdata]);      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambahdata = new Pegawai();
        $tambahdata->nama      = $request->np;
        $tambahdata->nip       = $request->nip;
        $tambahdata->jabatan   = $request->jbt;
        $tambahdata->periode   = $request->pk;
        $tambahdata->unit      = $request->uk;
        $tambahdata->group     = $request->gd;
        $tambahdata->nama1     = $request->na1;
        $tambahdata->nip       = $request->nip1;
        $tambahdata->jabatan   = $request->jbt1;
        $tambahdata->nama1     = $request->na2;
        $tambahdata->nip       = $request->nip2;
        $tambahdata->jabatan   = $request->jbt2;
        $tambahdata->save();

        return redirect('tambahdata')->with('success', 'Data Pegawai telah ditambah');//
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
        $id->delete();
        
        return redirect()->route('id.index');
    }
}
<?php

namespace App\Http\Controllers;

use App\Atasan1;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class AtasanController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $atasan = Atasan1::all();
        
        return view('pages.atasan1.dataatasan1',compact('atasan'));   //
    }
    
    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        //
    }
    
    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $atasan = new Atasan1();
        $atasan->nama = $request->nama;
        $atasan->nip = $request->nip;
        $atasan->jabatan = $request->jabatan;
        $atasan->save();

        if ($atasan) {
            Alert::toast('Atasan1 Create Successfully', 'success', 'top-right');
            return redirect()->route('atasan1.index');
        }
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
        $campaign = Atasan1::findOrFail($id);
        return $campaign;
    }
    
    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request)
    {
        $atasan = Atasan1::find($request->id);
        $atasan->nama = $request->nama;
        $atasan->nip = $request->nip;
        $atasan->jabatan = $request->jabatan;
        $atasan->save();

        Alert::toast('Atasan1 Edited Successfully', 'success', 'top-right');
        return redirect()->back();
    }
    
    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
    public function destroy($id)
    {
        // Campaign::where('id', $id)->delete();
        $atasan = Atasan1::find($id);
        $atasan->delete();
        Alert::toast('Atasan1 Deleted Successfully', 'success', 'top-right');
        
        return redirect()->back();
    }
}


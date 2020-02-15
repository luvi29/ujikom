<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penjualan;

class penjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penjualan= penjualan::orderBy('created_at','desc')->get();
        return view('penjualan.index', compact('penjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $penjualan = new penjualan();
        $penjualan->no_nota = $request->no_nota;
        $penjualan->tgl_nota = $request->tgl_nota;
        $penjualan->total_bayar = $request->total_bayar;
        $penjualan->nama_pembeli = $request->nama_pembeli;
        $penjualan->save();

        return redirect()->route('penjualan.index');
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
        $penjualan = penjualan::findOrfail($id);
        return view('penjualan.edit',compact('penjualan'));
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
        $penjualan = penjualan::findOrfail($id);
        $penjualan->no_nota = $request->no_nota;
        $penjualan->tgl_nota = $request->tgl_nota;
        $penjualan->total_bayar = $request->total_bayar;
        $penjualan->nama_pembeli = $request->nama_pembeli;
        $penjualan->save();

        return redirect()->route('penjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $penjualan = penjualan::findOrfail($id);
        if(!penjualan::destroy($id)) return redirect()->back();
        return redirect()->route('penjualan.index');
    }
}

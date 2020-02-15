<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\detailpenjualan;

class detailpenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $detailpenjualan= detailpenjualan::orderBy('created_at','desc')->get();
        return view('detailpenjualan.index', compact('detailpenjualan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('detailpenjualan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $detailpenjualan = new detailpenjualan();
        $detailpenjualan->harga_jual = $request->harga_jual;
        $detailpenjualan->jumlah = $request->jumlah;
        $detailpenjualan->subtotal = $request->subtotal;
        $detailpenjualan->save();

        return redirect()->route('detailpenjualan.index');
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
        $detailpenjualan = detailpenjualan::findOrfail($id);
        return view('detailpenjualan.edit',compact('detailpenjualan'));
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
        $detailpenjualan = detailpenjualan::findOrfail($id);
        $detailpenjualan->harga_jual = $request->harga_jual;
        $detailpenjualan->jumlah = $request->jumlah;
        $detailpenjualan->subtotal = $request->subtotal;
        $detailpenjualan->save();

        return redirect()->route('detailpenjualan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $detailpenjualan = detailpenjualan::findOrfail($id);
        if(!detailpenjualan::destroy($id)) return redirect()->back();
        return redirect()->route('detailpenjualan.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pembeli;

class pembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pembeli= pembeli::orderBy('created_at','desc')->get();
        return view('pembeli.index', compact('pembeli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pembeli = new pembeli();
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat_pembeli = $request->alamat_pembeli;
        $pembeli->telpon = $request->telpon;
        $pembeli->jeniskelamin = $request->jeniskelamin;
        $pembeli->save();

        return redirect()->route('pembeli.index');
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
        $pembeli = pembeli::findOrfail($id);
        return view('pembeli.edit',compact('pembeli'));
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
        $pembeli = pembeli::findOrfail($id);
        $pembeli->nama_pembeli = $request->nama_pembeli;
        $pembeli->alamat_pembeli = $request->alamat_pembeli;
        $pembeli->telpon = $request->telpon;
        $pembeli->jeniskelamin = $request->jeniskelamin;
        $pembeli->save();

        return redirect()->route('pembeli.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pembeli = pembeli::findOrfail($id);
        if(!pembeli::destroy($id)) return redirect()->back();
        return redirect()->route('pembeli.index');
    }
}

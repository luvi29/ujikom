<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\jeniskitab;

class jeniskitabController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jeniskitab= jeniskitab::orderBy('created_at','desc')->get();
        return view('jeniskitab.index', compact('jeniskitab'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('jeniskitab.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $jeniskitab = new jeniskitab();
        $jeniskitab->nama_jenis = $request->nama_jenis;
        $jeniskitab->save();

        return redirect()->route('jeniskitab.index');
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
        $jeniskitab = jeniskitab::findOrfail($id);
        return view('jeniskitab.edit',compact('jeniskitab'));
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
        $jeniskitab = jeniskitab::findOrfail($id);
        $jeniskitab->nama_jenis= $request->nama_jenis;
        $jeniskitab->save();

        return redirect()->route('jeniskitab.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jeniskitab = jeniskitab::findOrfail($id);
        if(!jeniskitab::destroy($id)) return redirect()->back();
        return redirect()->route('jeniskitab.index');
    }
}

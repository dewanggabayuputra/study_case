<?php

namespace App\Http\Controllers;

use App\Models\HasilIntegrasi;
use Illuminate\Http\Request;

class HasilIntegrasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = HasilIntegrasi::latest()->paginate(100);

        return view('hasil_integrasi.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\HasilIntegrasi  $hasilIntegrasi
     * @return \Illuminate\Http\Response
     */
    public function show(HasilIntegrasi $hasilIntegrasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HasilIntegrasi  $hasilIntegrasi
     * @return \Illuminate\Http\Response
     */
    public function edit(HasilIntegrasi $hasilIntegrasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HasilIntegrasi  $hasilIntegrasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, HasilIntegrasi $hasilIntegrasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HasilIntegrasi  $hasilIntegrasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(HasilIntegrasi $hasilIntegrasi)
    {
        //
    }
}

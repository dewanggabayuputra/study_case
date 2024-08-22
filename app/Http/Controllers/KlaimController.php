<?php

namespace App\Http\Controllers;

use App\Models\Klaim;
use App\Models\HasilIntegrasi;
use App\Models\LogAktivitas as Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class KlaimController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Klaim::latest()->paginate(100);
        
        return view('klaim.index', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function lampiran()
    {
        $lob_list = [
            'KBG dan Suretyship',
            'Konsumtif',
            'KUR',
            'PEN',
            'Produktif'
        ];

        $data = Klaim::select('lob', 'penyebab_klaim', 
             DB::raw('SUM(jumlah_nasabah) as total_nasabah'), 
             DB::raw('SUM(beban_klaim) as total_beban_klaim'))
        ->groupBy('lob', 'penyebab_klaim')
        ->orderBy('lob', 'asc')
        ->get();

        $sum = Klaim::select('lob', 
             DB::raw('SUM(jumlah_nasabah) as total_nasabah'), 
             DB::raw('SUM(beban_klaim) as total_beban_klaim'))
        ->groupBy('lob')
        ->orderBy('lob', 'asc')
        ->get();

        return view('klaim.view', compact('data', 'sum'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $lob_list = [
            'KBG dan Suretyship',
            'Konsumtif',
            'KUR',
            'PEN',
            'Produktif'
        ];

        $penyebab_klaim_list = [
            'Macet',
            'Kebakaran',
            'Meninggal',
            'PHK'   
        ];
        
        return view('klaim.create', compact('lob_list', 'penyebab_klaim_list'));
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
            'lob'          =>  'required',
            'penyebab_klaim'         =>  'required',
            'jumlah_nasabah'         =>  'required',
            'beban_klaim'   => 'required'
        ]);

        $payload = [
            'lob' => $request->lob,
            'penyebab_klaim' => $request->penyebab_klaim,
            'jumlah_nasabah' => $request->jumlah_nasabah,
            'beban_klaim' => $request->beban_klaim
        ];

        Klaim::create($payload);
        Log::create([
            'action' => 'create',
            'description' => 'Data klaim berhasil dibuat'. json_encode($payload)
        ]);
        
        return redirect()->route('klaim.index')->with('success', 'Klaim Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Klaim  $klaim
     * @return \Illuminate\Http\Response
     */
    public function show(Klaim $klaim)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Klaim  $klaim
     * @return \Illuminate\Http\Response
     */
    public function edit(Klaim $klaim)
    {
        $lob_list = [
            'KBG dan Suretyship',
            'Konsumtif',
            'KUR',
            'PEN',
            'Produktif'
        ];

        $penyebab_klaim_list = [
            'Macet',
            'Kebakaran',
            'Meninggal',
            'PHK'   
        ];

        return view('klaim.edit', compact('klaim', 'lob_list', 'penyebab_klaim_list'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Klaim  $klaim
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Klaim $klaim)
    {
        $request->validate([
            'lob'          =>  'required',
            'penyebab_klaim'         =>  'required',
            'jumlah_nasabah'         =>  'required',
            'beban_klaim'   => 'required'
        ]);

        $request->validate([
            'lob'          =>  'required',
            'penyebab_klaim'         =>  'required',
            'jumlah_nasabah'         =>  'required',
            'beban_klaim'   => 'required'
        ]);
        
        $klaim = Klaim::find($request->id);
        // $klaim->lob = $request->lob;
        // $klaim->penyebab_klaim = $request->penyebab_klaim;
        // $klaim->jumlah_nasabah = $request->jumlah_nasabah;
        // $klaim->beban_klaim = $request->beban_klaim;

        $payload = [
            'lob' => $request->lob,
            'penyebab_klaim' => $request->penyebab_klaim,
            'jumlah_nasabah' => $request->jumlah_nasabah,
            'beban_klaim' => $request->beban_klaim
        ];

        $klaim->update($payload);

        Log::create([
            'action' => 'update',
            'description' => 'Data klaim berhasil diubah '. json_encode($payload)
        ]);

        return redirect()->route('klaim.index')->with('success', 'Klaim Data has been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Klaim  $klaim
     * @return \Illuminate\Http\Response
     */
    public function destroy(Klaim $klaim)
    {
        $klaim->delete();

        Log::create([
            'action' => 'delete',
            'description' => 'Data klaim berhasil dihapus'
        ]);

        return redirect()->route('klaim.index')->with('success', 'Klaim Data deleted successfully');
    }

    public function integrasi(){
        HasilIntegrasi::truncate();
        
        $lob_list = [
            'KUR',
            'PEN',
        ];

        $data = Klaim::whereIn('lob', $lob_list)->get();

        $dataArray = $data->map(function ($item) {
            return [
                'klaim_id' => $item->id,
                'lob' => $item->lob,
                'penyebab_klaim' => $item->penyebab_klaim,
                'periode' => $item->created_at,
                'nilai_beban' => $item->beban_klaim,
                'created_at' => $item->created_at,
                'updated_at' => $item->created_at
            ];
        })->toArray();

        HasilIntegrasi::insert($dataArray);

        Log::create([
            'action' => 'integrasi',
            'description' => 'Klaim berhasil diintegrasi'
        ]);

        return redirect()->route('klaim.index')->with('success', 'Klaim Integration successfully');
    }
}

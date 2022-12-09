<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shalat;
use App\Models\Dzikir;

class BerandaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
    $shalats = Shalat::all();
    $dzikirs = Dzikir::all();
    $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
    $user_id = Auth::user()->id;
    $berbuat_baiks = 
    $agenda = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('user_id', $user_id)->first();
    $isi = [];
    $isi['shalat_subuh'] = $agenda['shalat_subuh'] ?? null;
    $isi['shalat_dzuhur'] = $agenda['shalat_dzuhur'] ?? null;
    $isi['shalat_ashar'] = $agenda['shalat_ashar'] ?? null;
    $isi['shalat_maghrib'] = $agenda['shalat_maghrib'] ?? null;
    $isi['shalat_isya'] = $agenda['shalat_isya'] ?? null;
    $isi['shalat_dhuha'] = $agenda['shalat_dhuha'] ?? null;
    $isi['shalat_tahajud'] = $agenda['shalat_tahajud'] ?? null;
    $isi['dzikir_pagi'] = $agenda['dzikir_pagi'] ?? null;
    $isi['dzikir_sore'] = $agenda['dzikir_sore'] ?? null;
    $isi['istighfar'] = $agenda['istighfar'] ?? null;
    $isi['shalawat'] = $agenda['shalawat'] ?? null;
    $isi['berbuat_baik'] = $agenda['berbuat_baik'] ?? null;
    $isi['ceramah'] = $agenda['ceramah'] ?? null;

    return view('/agenda', compact('shalats', 'dzikirs','isi'));   }

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
    public function beranda(){
        return view('beranda');
    }
};

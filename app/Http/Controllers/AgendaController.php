<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Shalat;
use App\Models\Dzikir;
use Auth;

class AgendaController extends Controller
{

    public function beranda(Request $request)
    {
        $shalats = Shalat::all();
        $dzikirs = Dzikir::all();
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $user_id = Auth::user()->id;
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

        return view('/beranda', compact('shalats', 'dzikirs','isi'));
    }
    public function post(Request $request)
    {
        $user_id = Auth::user()->id;
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $agenda = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('user_id', $user_id)->first();

        if($agenda){
            $agenda->user_id = Auth::user()->id;
            $agenda->shalat_subuh = $request->shalat_subuh;
            $agenda->shalat_dzuhur = $request->shalat_dzuhur;
            $agenda->shalat_ashar = $request->shalat_ashar;
            $agenda->shalat_maghrib = $request->shalat_maghrib;
            $agenda->shalat_isya = $request->shalat_isya;
            $agenda->shalat_dhuha = $request->shalat_dhuha;
            $agenda->shalat_tahajud = $request->shalat_tahajud;
            $agenda->dzikir_pagi = $request->dzikir_pagi;
            $agenda->dzikir_sore = $request->dzikir_sore;
            $agenda->istighfar = $request->istighfar;
            $agenda->shalawat = $request->shalawat;
            $agenda->berbuat_baik = $request->kebaikan;
            $agenda->ceramah = $request->ceramah;
            $agenda->update();
        }else{
            $agenda = new Agenda;
            $agenda->user_id = Auth::user()->id;
            $agenda->shalat_subuh = $request->shalat_subuh;
            $agenda->shalat_dzuhur = $request->shalat_dzuhur;
            $agenda->shalat_ashar = $request->shalat_ashar;
            $agenda->shalat_maghrib = $request->shalat_maghrib;
            $agenda->shalat_isya = $request->shalat_isya;
            $agenda->shalat_dhuha = $request->shalat_dhuha;
            $agenda->shalat_tahajud = $request->shalat_tahajud;
            $agenda->dzikir_pagi = $request->dzikir_pagi;
            $agenda->dzikir_sore = $request->dzikir_sore;
            $agenda->istighfar = $request->istighfar;
            $agenda->shalawat = $request->shalawat;
            $agenda->berbuat_baik = $request->kebaikan;
            $agenda->ceramah = $request->ceramah;
            $agenda->save();
        }
        return redirect('/beranda');
    }

    public function agenda(Request $request){

        $shalats = Shalat::all();
        $dzikirs = Dzikir::all();
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $user_id = Auth::user()->id;
        $berbuat_baiks = 
        $agenda = Agenda::where('created_at', 'like', '%'. $tanggal.'%')
        ->where('user_id', $user_id)->first();
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

        return view('/agenda', compact('shalats', 'dzikirs','isi'));
    }
    
      public function agendaAdmin(){
        return view('admin.agendaAdmin');
    }



}

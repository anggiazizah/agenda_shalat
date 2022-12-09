<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;

class RiwayatController extends Controller
{
    public function shalat_subuh(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $shalat_subuh = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('shalat_subuh', 'true')->get();
        return view('admin.riwayat.shalat.subuh', compact('shalat_subuh'));
    }

    public function shalat_dzuhur(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $shalat_dzuhur = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('shalat_dzuhur', 'true')->get();
        return view('admin.riwayat.shalat.dzuhur', compact('shalat_dzuhur'));
    }
    
    public function shalat_ashar(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $shalat_ashar = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('shalat_ashar', 'true')->get();
        return view('admin.riwayat.shalat.ashar', compact('shalat_ashar'));
    }
    
    public function shalat_maghrib(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $shalat_maghrib = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('shalat_maghrib', 'true')->get();
        return view('admin.riwayat.shalat.maghrib', compact('shalat_maghrib'));
    }
    
    public function shalat_isya(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $shalat_isya = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('shalat_isya', 'true')->get();
        return view('admin.riwayat.shalat.isya', compact('shalat_isya'));
    }
    
    public function shalat_dhuha(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $shalat_dhuha = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('shalat_dhuha', 'true')->get();
        return view('admin.riwayat.shalat.dhuha', compact('shalat_dhuha'));
    }
    
    public function shalat_tahajud(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $shalat_tahajud = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('shalat_tahajud', 'true')->get();
        return view('admin.riwayat.shalat.tahajud', compact('shalat_tahajud'));
    }

    public function dzikir_pagi(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $dzikir_pagi = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('dzikir_pagi', 'true')->get();
        return view('admin.riwayat.dzikir.dzikirpagi', compact('dzikir_pagi'));
    }

    public function dzikir_sore(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $dzikir_sore = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('dzikir_sore', 'true')->get();
        return view('admin.riwayat.dzikir.dzikirsore', compact('dzikir_sore'));
    }

    public function istighfar(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $istighfar = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('istighfar', 'true')->get();
        return view('admin.riwayat.dzikir.istighfar', compact('istighfar'));
    }
    public function shalawat(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $shalawat = Agenda::where('created_at', 'like', '%'. $tanggal.'%')->where('shalawat', 'true')->get();
        return view('admin.riwayat.dzikir.shalawat', compact('shalawat'));
    }

    public function berbuat_baik(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $berbuat_baik = Agenda::whereNotNull('berbuat_baik')->where('created_at', 'like', '%'. $tanggal.'%')->get();
        return view('admin.riwayat.kebaikan.berbuatbaik', compact('berbuat_baik'));
    }

    public function ceramah(Request $request)
    {
        $tanggal =  $request->tanggal  ? date('Y-m-d',strtotime($request->tanggal)) : date('Y-m-d');
        $ceramah = Agenda::whereNotNull('ceramah')->where('created_at', 'like', '%'. $tanggal.'%')->get();
        return view('admin.riwayat.ceramah.ceramah', compact('ceramah'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\agenda;
use App\Models\Shalat;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function dashboard(){
        $users = User::where('role', 'siswa');
        $pria = User::where('jenis_kelamin', 'laki-laki');
        $perempuan = User::where('jenis_kelamin', 'perempuan');
        
        $agendas = agenda::all();

        $shalat_subuh = agenda::where('shalat_subuh', 'true')
        ->whereDate('created_at', '=',Carbon::today()->toDateString())->count();
        $shalat_dzuhur = agenda::where('shalat_dzuhur', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $shalat_ashar = agenda::where('shalat_ashar', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $shalat_maghrib = agenda::where('shalat_maghrib', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $shalat_isya = agenda::where('shalat_isya', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $shalat_dhuha = agenda::where('shalat_dhuha', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $shalat_tahajud = agenda::where('shalat_tahajud', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $dzikir_pagi = agenda::where('dzikir_pagi', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $dzikir_sore = agenda::where('dzikir_sore', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $istighfar = agenda::where('istighfar', 'true')
        ->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $shalawat = agenda::where('shalawat', 'true')
        ->whereDate('created_at', '=', Carbon::today()
        ->toDateString())->count();
        $berbuat_baik = agenda::all();
        $berbuat_baik = agenda::whereNotNull('berbuat_baik')->whereDate('created_at', '=', Carbon::today()->toDateString())->count();
        $ceramah = agenda::all();
        $ceramah = agenda::whereNotNull('ceramah')->whereDate('created_at', '=', Carbon::today()->toDateString())->count();




        return view('admin.dashboardAdmin', [
            'agendas' => $agendas,
            'users' => $users,
            'pria' => $pria,
            'perempuan' => $perempuan,
            'shalat_subuh' => $shalat_subuh, 
            'shalat_dzuhur' => $shalat_dzuhur, 
            'shalat_ashar' => $shalat_ashar, 
            'shalat_maghrib' => $shalat_maghrib, 
            'shalat_isya' => $shalat_isya, 
            'shalat_dhuha' => $shalat_dhuha, 
            'shalat_tahajud' => $shalat_tahajud, 
            'dzikir_pagi' => $dzikir_pagi,
            'dzikir_sore' => $dzikir_sore,
            'istighfar' => $istighfar,
            'shalawat' => $shalawat,
            'berbuat_baik' => $berbuat_baik,
            'ceramah' => $ceramah
        ]);
    }
}

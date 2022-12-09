<?php

namespace App\Http\Controllers;
use Auth;
use App\Http\Controllers\LoginController;
use App\Models\Shalat;
use App\Models\Dzikir;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    
   public function PostLogin(Request $request)
   {
        if(Auth::attempt(['nis' => $request->input, 'password' => $request->password])) {
            if(Auth::user()->role === 'Siswa') {
                return redirect('beranda');
            }
        } elseif(Auth::attempt(['email' => $request->input, 'password' => $request->password])) {
            if(Auth::user()->role === 'Siswa') {
                return back();
            }
            if(Auth::user()->role === 'Admin') {
                return redirect(route('admin.dashboardAdmin'));
            }
        } else {
            return back();
        }

   }

   public function AdminLogin(Request $request)
    {
        if(Auth::attempt(['nis' => $request->input, 'password' => $request->password])) {
            $user = User::find(Auth::user()->id);
            $user->logged_in = true;
            $user->update();
            return redirect(route('/dashboard'));
        } elseif(Auth::attempt(['email' => $request->input, 'password' => $request->password])) {
            $user = User::find(Auth::user()->id);
            $user->logged_in = true;
            $user->update();
            return redirect(route('/dashboard'));
        } else {
            return redirect('/');
        }
    }

    public function dashboard(){
        $users = User::all();
        $pria = User::where('jenis_kelamin', 'pria');
        $wanita = User::where('jenis_kelamin', 'wanita');
        return view('/dashboard', compact('users', 'pria', 'wanita'));
    }



    

   
// public function insertCheckbox(Request $request){
//     if(!empty($request->input('isian'))){
//         $checkbox = join(',',$request->input('isian'));
//         \DB::table('checkbox')->insert(['isian'=>$checkbox]);
//     }else{
//         $checkbox = '';
//     }
//     dd($checkbox);
// }

// public function checkboxPage(Request $request)
// {
//     return view('layouts.agenda');
// }
}

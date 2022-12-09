<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(Request $request)
    {
        $user = User::find($request->id);
        $user->nama = $request->nama;
        $user->kelas = $request->kelas;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->nis = $request->nis;
        $user->email = $request->email;

        $user->update();

        return redirect('/profile');
    }


    public function profile(){
        return view('/profile');
    }

    public function edit(){
        return view('/edit');
     }

     public function profileAdmin(){
        $user_login = User::where('role', 'siswa')->get();
        return view('pengguna.index', compact('user_login'));  
    }

    
}
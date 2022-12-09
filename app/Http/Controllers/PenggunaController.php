<?php

namespace App\Http\Controllers;

use App\Models\User;
use Session;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $users = new User;       
        $users = User::where('role', 'Siswa');
        $katakunci = $request->katakunci;
        $jumlahbaris = 4;
        if(strlen($katakunci)){
            $data = User::where('nis','like',"%$katakunci%")
            ->where('role','Siswa')
            ->orWhere('email','like',"%$katakunci%")
            ->orWhere('nama','like',"%$katakunci%")
            ->orWhere('password','like',"%$katakunci%")
            ->orWhere('kelas','like',"%$katakunci%")
            ->orWhere('jenis_kelamin','like',"%$katakunci%")
            ->paginate($jumlahbaris);

        }else {
            $data = User::orderBy('nis','desc')->where('role','Siswa')->paginate($jumlahbaris);
        }
        return view('pengguna.index')->with('data', $data); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengguna.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Session::flash('nis', $request->nis);
        Session::flash('email', $request->email);
        Session::flash('nama', $request->nama);
        Session::flash('password', $request->password);
        Session::flash('kelas', $request->kelas);
        Session::flash('jenis_kelamin', $request->jenis_kelamin);




        $request->validate([
            'nis'=>'required|numeric|unique:user,nis',
            // 'email'=>'required|email|unique:user,email',
            'nama'=>'required',
            'password'=>'required',
            'kelas'=>'required',
            'jenis_kelamin'=>'required',



        ],[
            'nis.required'=>'NIS wajib diisi',
            'nis.numeric'=>'NIS wajib angka',
            'nis.unique'=>'NIS sudah dipakai',
            // 'email.required'=>'Email wajib diisi',
            // 'email.email'=>'Email wajib @',
            'nama.required'=>'Nama wajib diisi',
            'password.required'=>'Password wajib diisi',
            'kelas.required'=>'kelas wajib diisi',
            'jenis_kelamin.required'=>'Jenis Kelamin wajib diisi',





        ]);
        $data = [
            'nis' => $request->nis,
            'email' => $request->email,
            'nama' => $request->nama,
            'password' => bcrypt($request->password),
            'kelas' => $request->kelas,
            'jenis_kelamin' => $request->jenis_kelamin,




        ];
        User::create($data);
        return redirect()->to('pengguna')->with('success', 'Berhasil Menambahkan Data!');
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
        $data = User::where('nis', $id)->first();
        return view('pengguna.edit')->with('data', $data);
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
        $request->validate([
            'nama'=>'required',
            'kelas'=>'required',



        ],[
            'nama.required'=>'Nama wajib diisi',
            'kelas.required'=>'kelas wajib diisi',



        ]);
        $data = [
            'nama' => $request->nama,
            'kelas' => $request->kelas,


        ];
        if($request->password!=null||$request->password!='') {
            $data['password']=bcrypt($request->password);
        }
        // $data->update($request->all());
        User::where('nis', $id)->update($data);
        return redirect()->to('pengguna')->with('success', 'Berhasil Update Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('nis', $id)->delete();
        return redirect()->to('pengguna')->with('success', 'Berhasil Dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KalenderController extends Controller
{
    public function kalender(){
        return view('/kalender');
    }

    public function kalenderAdmin(){
        return view('admin.kalenderAdmin');
    }
}

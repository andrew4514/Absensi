<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KetController extends Controller
{
    public function create(){
        return view('keterangan.inputKet');
    }
}

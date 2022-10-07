<?php

namespace App\Http\Controllers;

use App\Models\Keterangan;
use Illuminate\Http\Request;

class KetController extends Controller
{


    public function index(){
        $ket = Keterangan::latest()->get();
        return view('keterangan.readKet',compact('ket'));
    }

    public function create(){
        return view('keterangan.inputKet');
    }

    public function store(Request $request){
        $this->validate($request,[
            'keterangan' => 'required'
        ]);

        Keterangan::create([
            'keterangan' => $request->keterangan
        ]);

        return redirect('keterangan')->with('message','Data telah disimpan!');
    }

    public function show($id){

    }

    public function destroy($id){
         $ket = Keterangan::find($id);
         $ket->delete();
         return redirect('keterangan')->with('delete','Data telah berhasil dihapus');
    }

}

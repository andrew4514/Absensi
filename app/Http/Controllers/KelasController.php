<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kel = Kelas::latest()->get();
        return view('kelasSD.readKel', compact('kel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelasSD.inputKel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'kelas' => 'required'
        ]);

        Kelas::create([
            'kelas' => $request->kelas
        ]);

        return redirect('kelasSD')->with('message-create-kelas', 'Data telah disimpan!');
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
        $kel = Kelas::find($id);
        return view('kelasSD.editKel',compact('kel'));
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
        $kel = Kelas::find($id);
        $kel->kelas = $request->kelas;
        $kel->save();

        return redirect('kelasSD')->with('message-update-kelas','Data telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kel = Kelas::find($id);
        $kel->delete();
        return redirect('kelasSD')->with('message-delete-kelas','Data telah dihapus!');
    }
}

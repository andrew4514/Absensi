<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelasSMK;

class KelasSMKController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kel = kelasSMK::latest()->get();
        return view('kelasSMK.readKel', compact('kel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelasSMK.inputKel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kelas' => 'required'
        ]);

        kelasSMK::create([
            'kelas' => $request->kelas
        ]);

        return redirect('kelasSMK')->with('message-create-kelas-smk', 'Data telah disimpan!');
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
        $kel = kelasSMK::find($id);
        return view('kelasSMK.editKel', compact('kel'));
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
        $kel = kelasSMK::find($id);
        $kel->kelas = $request->kelas;
        $kel->save();

        return redirect('kelasSMK')->with('message-update-kelas-smk', 'Data telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kel = kelasSMK::find($id);
        $kel->delete();
        return redirect('kelasSMK')->with('message-delete-kelas-smk', 'Data telah dihapus!');
    }
}

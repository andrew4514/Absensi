<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelasSMP;

class KelasSMPController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kel = kelasSMP::latest()->get();
        return view('kelasSMP.readKel', compact('kel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelasSMP.inputKel');
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

        kelasSMP::create([
            'kelas' => $request->kelas
        ]);

        return redirect('kelasSMP')->with('message-create-kelas-smp', 'Data telah disimpan!');
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
        $kel = kelasSMP::find($id);
        return view('kelasSMP.editKel', compact('kel'));
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
        $kel = kelasSMP::find($id);
        $kel->kelas = $request->kelas;
        $kel->save();

        return redirect('kelasSMP')->with('message-update-kelas-smp', 'Data telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kel = kelasSMP::find($id);
        $kel->delete();
        return redirect('kelasSMP')->with('message-delete-kelas-smp', 'Data telah dihapus!');
    }
}

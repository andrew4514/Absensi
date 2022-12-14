<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasSMA;

class KelasSMAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kel = kelasSMA::latest()->get();
        return view('kelasSMA.readKel', compact('kel'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelasSMA.inputKel');
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

        kelasSMA::create([
            'kelas' => $request->kelas
        ]);

        return redirect('kelasSMA')->with('message-create-kelas-sma', 'Data telah disimpan!');
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
        $kel = kelasSMA::find($id);
        return view('kelasSMA.editKel', compact('kel'));
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
        $kel = kelasSMA::find($id);
        $kel->kelas = $request->kelas;
        $kel->save();

        return redirect('kelasSMA')->with('message-update-kelas-sma', 'Data telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kel = kelasSMA::find($id);
        $kel->delete();
        return redirect('kelasSMA')->with('message-delete-kelas-sma', 'Data telah dihapus!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tunjangan;

class TunjanganController extends Controller
{
    //
    public function index(){
        $tunjangan = Tunjangan::all();
        return view('tunjangan.index', compact('tunjangan'));
    }

    public function create(Request $request){
        $tunjangan = $request->all();
        Tunjangan::create($tunjangan);
        return redirect()->route('tunjangan.index');
    }

    public function edit($id){
        $tunjangan = Tunjangan::find($id);
        return view('tunjangan.edit', compact('tunjangan'));
    }

    public function update(Request $request, $id){
        $data = $request->all();
        $tunjangan = Tunjangan::find($id);
        $tunjangan->update($data);
        return redirect()->route('tunjangan.index');
    }

    public function delete($id){
        $tunjangan = Tunjangan::find($id);
        $tunjangan->delete($id);
        return redirect()->route('tunjangan.index');
    }

}

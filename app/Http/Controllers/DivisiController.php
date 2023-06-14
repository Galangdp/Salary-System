<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    //
    public function index(){
        $divisi = Divisi::all();
        return view('divisi.index', compact('divisi'));
    }

    public function create(Request $request){
        $divisi = $request->all();
        Divisi::create($divisi);
        return redirect()->route('divisi.index');
    }

    public function delete($id){
        $divisi = Divisi::find($id);
        $divisi->delete();
        return redirect()->route('divisi.index');
    }
}

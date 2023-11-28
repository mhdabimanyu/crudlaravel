<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\support\facades\DB;

use Illuminate\Http\Request;

class soalController extends Controller
{
    public function index(){

        $i = 1;
        $soal = DB::table('soal')->get();
        return view('soal',['soal' => $soal ,'i' => $i]);
    }
    public function tambah(){
        return view('soal');
    }
    public function store(Request $request){
        DB::table('soal')->insert([
            'jenis' => $request->jenis,
            'pilihan' => $request->pilihan,
            'kunci' => $request->kunci,
           

            
        ]); 
        return redirect('/soal')->with('toast_success', 'data berhasil disimpan!');
    }
}

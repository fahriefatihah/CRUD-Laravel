<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JawabanModel;
use App\Models\PertanyaanModel;

class JawabanController extends Controller
{
   public function index($id){
        $pertanyaan = PertanyaanModel::find($id);
        $jawaban = $pertanyaan->jawab;
        return view('jawaban.index',compact('pertanyaan','jawab'));
   }

   public function store(Request $request){
       $new = new \App\Models\JawabanModel;
       $new->isi = $request->get('jawaban');
       $new->pertanyaan_id = $request->get('pertanyaan_id');
       
       $new->save();
       return redirect()->route('jawaban.index',$request->get('pertanyaan_id'));
       
   }
}

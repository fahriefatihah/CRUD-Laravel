<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;
    
class PertanyaanModel {
    public static function get_all(){
        $pertanyaan=DB::table('pertanyaan')->get();
        return $pertanyaan;
    }
    
      public static function save($data){
        //membuang data_token , berikut perintahny
        unset($data["_token"]);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $new=DB::table('pertanyaan')->insert($data);
        return $new;
    }

    public static function find_by_id($id){
        $pertanyaan = DB::table('pertanyaan')->where('id',$id)->first();
        return $pertanyaan;
    }

    public static function update($id,$request){
        //dd($request);
        $pertanyaan = DB::table('pertanyaan')
                        ->where('id',$id)
                        ->update([
                            'judul' => $request["judul"],
                            'isi' => $request["isi"],
                            ]);
        return $pertanyaan;
        }

        public static function destroy($id){
            $hapus = DB::table('pertanyaan')
                         ->where('id',$id)
                         ->delete();
        return $hapus;
        }
    }
     


?>
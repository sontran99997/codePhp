<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;

class CateController extends Controller
{
    public function addCate(){
        return view('admin.addcate');
    }
    
    public function listcate(){
        //lay ds cac loai sp
        $query = DB::table('category')
            ->select("cateid","catename")
            ->orderby('cateid', 'ASC')
            ->get();
        return view('admin.listcate')->with('ds',$query);
    }
    public function addcatepost( Request $request){
        $t = $request->post('ten');
        $mota = $request->post('mota');

        DB::table('category')
        ->insert([
            'catename' => $t, 'decription' => $mota
        ]);
        
        $query = DB::table('category')
            ->select("cateid","catename")
            ->orderby('cateid', 'ASC')
            ->get();
        return view('admin.listcate')->with('ds',$query);
        
    }
}

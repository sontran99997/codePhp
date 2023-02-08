<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Bai03Controller extends Controller
{
    public function tuyensinh(){
        return view("v_tuyensinh");
    }
    public function xulytuyensinh(Request $request){ //ham xu ly du lieu tu form
        $t = $request->post('toan'); //lay gai tri ti textbox co name la toan
        $l = $request->post('ly');
        $h = $request->post('hoa');
        $kv = $request->post('kv');
        $tongdiem = $t+$l+$h;
        $diemut = 0;
        return view("v_tuyensinh")->with(['toan'=>$t, 'ly'=>$l, 'hoa'=>$h, 'kv'=>$kv, 'tong'=>$tongdiem, 'pri'=>$diemut]);
    }
}

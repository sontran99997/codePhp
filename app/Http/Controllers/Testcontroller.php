<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Testcontroller extends Controller
{
    // action tinh tong
    public function tong($a,$b){
        //return $a;
        return view("v_tong",['id1'=>$a,'id2'=>$b]);
    }
}

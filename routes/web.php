<?php

use App\Http\Controllers\Bai03Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Testcontroller;
use App\Http\Controllers\CateController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get(
    '/tin-tuc/{noidung}-{id}.htm',function($noidung,$id){
        return "noi dung:  ".$noidung." - id la: ".$id;
    }
);//->where(['noidung'=>'[a-z]']);
Route::get(
    '/test2',function(){
        return view("dangnhap");
    }
);
Route::post(
    '/test3',function(){
        return "xu ly cho method post";
    }
);
Route::get('/tinh-tong/{a}+{b}',[Testcontroller::class,'tong']);

Route::post('/b3',[Bai03Controller::class,'tuyensinh']);
Route::post('/tuyen-sinh-post',[Bai03Controller::class,'xulytuyensinh']);
//mo view nhap lieu
Route::get('/add-cate',[CateController::class,'addcate']);

Route::get('/list-cate',[CateController::class,'listcate']);
//xu ly khi nhan nut them moi
Route::post('/add-cate-post',[CateController::class,'addcatepost']);
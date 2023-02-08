<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table ="category"; //tuong ung voisw ten bang duoi CSDL
    public $primarykey = "cateid"; //tuong ung voi khoa chinh trong bang
    public $timestamps = false; // khong can theo doi thoi gian ghi/cap nhat du lieu
    protected $attributes = ['decription'=>'']; //gia tri mac dinh cua cot decription la ''
    protected $fillable =['catename','decription'];
    use HasFactory;
}

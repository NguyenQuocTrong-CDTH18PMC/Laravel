<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LoTrinh;
use App\ChiTietNhom;
use App\ChiTietLichTrinhNhom;   
class NhomPhuot extends Model
{
    public $timestamps = false;
    protected $table = 'nhom_phuots';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'message',
        'image',
    ];

    public function LoTrinhs() {
        return $this->hasMany('App\LoTrinh', 'nhom_id', 'id');
    }

    public function ChiTietNhom(){
        return $this->hashMany('App\ChiTietNhom','chitiet_id','id');
    }

    public function ChiTietLichTrinhNhoms(){
        return $this->hashMany('App\ChiTietLichTrinhNhom','chitiet_id','id');
    }
}

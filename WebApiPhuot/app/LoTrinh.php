<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NhomPhuot;
use App\ChiTietLichTrinhNhom;
use App\ChiTietLichTrinhDiaDiem;


class LoTrinh extends Model
{
    public $timestamp = false;
    protected $table = 'lo_trinhs';
    protected $primaryKey = 'id';
    protected $fillabe = [
        'nhom_id',
        'diadiem_id',
        'status'
    ];
    
    public function nhomphuot() {
        return $this->belongsTo('App\NhomPhuot', 'nhom_id', 'id');
    }
    public function diadiem() {
        return $this->belongsTo('App\NhomPhuot', 'diadiem_id', 'id');
    }
    public function chitietlichtrinhnhoms(){
         return $this->hashMany('App\ChiTietLichTrinhNhom','chitiet_id','id');
    }
    public function chitietlichtrinhdiadiem(){
        return $this->hashMany('App\ChiTietLichTrinhDiaDiem','chitiet_id','id');
    }
}

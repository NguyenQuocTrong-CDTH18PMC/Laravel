<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BaiViet extends Model
{
    //
    protected $primaryKey="id";
    protected $table="baiviets";
    protected $fileable=[
        "title","content","date","diadiem_id","loaibaiviet_id","user_id","status"
    ];

    public function user(){
        //một
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
    public function diadiem() {
        return $this->belongsTo('App\User','diadiem_id', 'id');
    }
    public function loaibaiviet(){
        return $this->belongsTo('App\LoaiBaiViet','loaibaiviet_id','id');
    }

    
    
    
}

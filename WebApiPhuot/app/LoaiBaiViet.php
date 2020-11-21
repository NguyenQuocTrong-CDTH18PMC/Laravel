<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiBaiViet extends Model
{
    //
    protected $primaryKey="id";
    protected $table="loai_bai_viets";
    protected $fileable=[
        "name"
    ];

    public function BaiViets(){
        return $this->hasMany('App\BaiViet', 'loaibaiviet_id', 'id');
    }
}

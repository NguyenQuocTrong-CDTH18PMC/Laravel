<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaDiem extends Model
{
    //
    protected $primaryKey="id";
    protected $table="dia_diems";
    protected $fileable=[
        "name","toadoX","toadoY","loai_id","status"
    ];

    public function LoTrinhs() {
        return $this->hasMany('App\LoTrinh', 'diadiem_id', 'id');
    }

    public function BaiViets(){
        return $this->hasMany('App\BaiViet', 'diadiem_id', 'id');
    }
}

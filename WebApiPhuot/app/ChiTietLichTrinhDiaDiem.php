<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\LoTrinh;
use App\DiaDiem;
class ChiTietLichTrinhDiaDiem extends Model
{
    //
    public $timestamp = false;
    protected $table = 'chi_tiet_lich_trinh_dia_diems';
    protected $primaryKey = 'id';
    protected $fillabe = [
        'diadiem_id',
        'lotrinh_id',
        'status'    
    ];
    
    public function diadiem() {
        return $this->belongsTo('App\DiaDiem', 'diadiem_id', 'id');
    }

    public function lotrinh() {
        return $this->belongsTo('App\LoTrinh', 'lotrinh_id', 'id');
    }
}

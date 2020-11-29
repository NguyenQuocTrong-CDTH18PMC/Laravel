<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\NhomPhuot;

class ChiTietLichTrinhNhom extends Model
{
    //
    public $timestamp = false;
    protected $table = 'chi_tiet_lich_trinh_nhoms';
    protected $primaryKey = 'id';
    protected $fillabe = [
        'nhomphuot_id',
        'lotrinh_id',
        'status'
    ];
    
    public function nhomphuot() {
        return $this->belongsTo('App\NhomPhuot', 'nhomphuot_id', 'id');
    }

    public function lotrinh() {
        return $this->belongsTo('App\LoTrinh', 'lotrinh_id', 'id');
    }
    
}

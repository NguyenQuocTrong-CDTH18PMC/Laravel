<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\NhomPhuot;
class ChiTietNhom extends Model
{
    //
    public $timestamp = false;
    protected $table = 'chi_tiet_nhoms';
    protected $primaryKey = 'id';
    protected $fillabe = [
        'user_id',
        'nhomphuot_id',
        'status'
    ];
    
    public function nhomphuot() {
        return $this->belongsTo('App\NhomPhuot', 'nhom_id', 'id');
    }

    public function user() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}

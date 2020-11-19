<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


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
}

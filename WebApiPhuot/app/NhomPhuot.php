<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}

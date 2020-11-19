<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LoaiDiaDiem extends Model
{
    //
    protected $primaryKey="id";
    protected $table="baiviets";
    protected $fileable=[
        "name"
    ];
}

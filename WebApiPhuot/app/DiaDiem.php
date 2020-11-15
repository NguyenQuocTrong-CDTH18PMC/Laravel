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
}

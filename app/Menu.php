<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $primary="id";
    protected $table="menus";
    protected $fileable=['desc','link','parentId','name'];
    public function LaMenuCha()
    {
        return $this->hasMany("App\Menu",'parentId','Id');
    }
    public function LaConCua()
    {
        return $this->belongsTo($this,'parentId','Id');
    }
}

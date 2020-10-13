<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserLevel extends Model
{
    //
    protected $primary="id";
    protected $table="user_levels";
    public function UserLevelNUser()
    {
        return $this->hasMany(User::class);
    }
}

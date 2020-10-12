<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Menu;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class BackController extends Controller
{
    //Minh hai 10/12/2020
    //Manage Menu
    public function __construct()
    {
        @session();
    }
    public function Index()
    {
        try {

            return view("Be.index");
        } catch (ModelNotFoundException $exception) {
            return('Be.Auth.login');
        }

    }
}

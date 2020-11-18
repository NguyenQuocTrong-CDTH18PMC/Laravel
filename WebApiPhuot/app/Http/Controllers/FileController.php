<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getImage($imageUrl) {
        //get image
        return response()->download(public_path('uploads/'.$imageUrl), $imageUrl);
    }

    
}

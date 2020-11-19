<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function getImage($imageUrl) {
        //get image
        if(file_exists(public_path('uploads/'.$imageUrl))){
            return response()->download(public_path('uploads/'.$imageUrl), $imageUrl);
        }
        return response()->json(["message" => "Not found file!"],404); 
        
    }

    

    
}

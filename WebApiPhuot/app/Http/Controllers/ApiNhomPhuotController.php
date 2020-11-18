<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhomPhuot;
class ApiNhomPhuotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NhomPhuot::where('status', '<>', '-1')->orderBy('id', 'DESC')->get();
        
        return response()->json($data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nhom_phuot = new NhomPhuot();
        $nhom_phuot->name = $request->name;
        $nhom_phuot->message = $request->message;
        $nhom_phuot->ngaydi = $request->ngaydi;
       
        $nhom_phuot->status= $request->status;
        $nhom_phuot->save();
        return response()->json($nhom_phuot, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = NhomPhuot::find($id);
        if(is_null($data)) {
            return response()->json('Not found!',404); 
        }
        return response()->json($data,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        //method PUT
        $nhom_phuot = NhomPhuot::find($id);
        if(is_null($nhom_phuot)) {
            return response()->json('Not found!',404); 
        }
        $nhom_phuot->name = $request->name;
        $nhom_phuot->message = $request->message;
        $nhom_phuot->ngaydi = $request->ngaydi;
        $nhom_phuot->status= $request->status;
        $nhom_phuot->save();
        return response()->json($nhom_phuot, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhom_phuot = NhomPhuot::find($id);
        if(is_null($nhom_phuot)) {
            return response()->json('Not found!',404); 
        }
        $nhom_phuot->status = -1;
        $nhom_phuot->save(); 
        return response()->json($nhom_phuot);
    }
}

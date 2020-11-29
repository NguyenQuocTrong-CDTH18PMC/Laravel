<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiTietNhom;
class ApiChiTietNhom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(ChiTietNhom::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= new ChiTietNhom();
        $data->user_id=$request->user_id;
        $data->nhomphuot_id=$request->nhomphuot_id;
        $data->status_id=$request->status_id;
        $flag=$data->save();
        return response()->json($flag);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data=ChiTietNhom::find($id);
        return response()->json($data);
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
        //
        $data= ChiTietNhom::find($id);
        $data->user_id=$request->user_id;
        $data->nhomphuot_id=$request->nhomphuot_id;
        $data->status_id=$request->status_id;
        $flag=$data->save();
        return response()->json($flag);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $data= ChiTietNhom::find($id);
        $data->status=0;
        $flag=$data->save();
        return response()->json($flag);
    }
}

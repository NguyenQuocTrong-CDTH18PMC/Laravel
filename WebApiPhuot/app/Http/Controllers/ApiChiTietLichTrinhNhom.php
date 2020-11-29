<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChiTietLichTrinhNhom;

class ApiChiTietLichTrinhNhom extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(ChiTietLichTrinhNhom::all());
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
        $data= new ChiTietLichTrinhNhom();
        $data->nhomphuot_id=$request->nhomphuot_id;
        $data->lotrinh_id=$request->lotrinh_id;
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
        $data=ChiTietLichTrinhNhom::find($id);
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
        $data= ChiTietLichTrinhNhom::find($id);
        $data->nhomphuot_id=$request->nhomphuot_id;
        $data->lotrinh_id=$request->lotrinh_id;
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
        $data= ChiTietLichTrinhNhom::find($id);
        $data->status=0;
        $flag=$data->save();
        return response()->json($flag);
    }
}

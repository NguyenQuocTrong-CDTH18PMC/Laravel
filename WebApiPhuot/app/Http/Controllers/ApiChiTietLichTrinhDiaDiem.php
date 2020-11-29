<?php

namespace App\Http\Controllers;
use App\ChiTietLichTrinhDiaDiem;
use Illuminate\Http\Request;

class ApiChiTietLichTrinhDiaDiem extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data=ChiTietLichTrinhDiaDiem::all();
        return response()->json($data);
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
        $data= new ChiTietLichTrinhDiaDiem();
        $data->diadiem_id=$request->diadiem_id;
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
        $data=ChiTietLichTrinhDiaDiem::find($id);
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
        $data= ChiTietLichTrinhDiaDiem::find($id);
        $data->diadiem_id=$request->diadiem_id;
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
        $data= ChiTietLichTrinhDiaDiem::find($id);
        $data->status=0;
        $flag=$data->save();
        return response()->json($flag);
    }
}

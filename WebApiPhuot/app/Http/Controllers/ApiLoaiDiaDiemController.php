<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoaiDiaDiem;
class ApiLoaiDiaDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return response()->json(LoaiDiaDiem::all());
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
        $loaidiadiem=new LoaiDiaDiem();
        $loaidiadiem->name=$request->name;
        $loaidiadiem->status=1;
        $flag=$loaidiadiem->save();
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
        return response()->json(LoaiDiaDiem::find($id));
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
        $diadiem=LoaiDiaDiem::find($id);
        $loaidiadiem->name=$request->name;
        $loaidiadiem->status=1;
        $flag=$loaidiadiem->save();
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
        $loaidiadiem=LoaiDiaDiem::find($id);
        $loaidiadiem->status=0;
        $flag=$diadiem->save();
        return response()->json($flag);
    }
}

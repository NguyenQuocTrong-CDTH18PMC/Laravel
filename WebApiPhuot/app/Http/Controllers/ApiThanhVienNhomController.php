<?php

namespace App\Http\Controllers;

use App\ThanhVienNhom;
use Illuminate\Http\Request;

class ApiThanhVienNhomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(ThanhVienNhom::where('status',1)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tvnhom=new ThanhVienNhom();
        $tvnhom->nhom_id = $request->nhom_id;
        $tvnhom->user = $request->user_id;
        $tvnhom->status = 1;

        $flag=$tvnhom->save();
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
        return response()->json(ThanhVienNhom::find($id));
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
        $tvnhom=ThanhVienNhom::find($id);
        $tvnhom->nhom_id = $request->nhom_id;
        $tvnhom->user = $request->user_id;
        $tvnhom->status = 1;

        $flag=$tvnhom->save();
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
        $tvnhom=ThanhVienNhom::find($id);
        $tvnhom->status = 0;
        $flag=$tvnhom->save();
        return response()->json($flag);
    }
}

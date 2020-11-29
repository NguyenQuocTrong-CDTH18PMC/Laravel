<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LoTrinh;

class ApiLoTrinhController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return response()->json(LoTrinh::all());

        $data = LoTrinh::with('nhomphuot', 'diadiem')->orderBy('id', 'DESC')->get();
        
        return response()->json([
            'data' => $data
        ], 200);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data= new LoTrinh();
        $data->diadiem_id=$request->diadiem_id;
        $data->nhom_id=$request->nhom_id;
        $data->status_id=$request->status_id;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $data = LoTrinh::find($id);
        return response()->json($data);
        $data = LoTrinh::with('nhomphuot', 'diadiem')->find($id);
        
        if(is_null($data)) {
            return response()->json(["message" => "Not found!"],404); 
        }
        return response()->json([
            'data' => $data
        ], 200);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
 

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
        $data= LoTrinh::find($id);
        $data->diadiem_id=$request->diadiem_id;
        $data->nhom_id=$request->nhom_id;
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
        $data=LoTrinh::find($id);
        $data->status=0;
        $flag=$data->save();
        return response()->json($flag);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DiaDiem;
class ApiDiaDiemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = DiaDiem::where('status', '<>', '-1')->orderBy('id', 'DESC')->get();
        
         return response()->json($data);
        
        // if($data->count() > 0) {
        //     return response()->json([
        //         'data' => $data,
        //         'message' => 'Hiển thị thành công'
        //     ], 200);
        // }
        // return response()->json(['message' => 'Không tìm thấy dữ liệu']);
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
        $diadiem=new DiaDiem();
        $diadiem->name=$request->name;
        $diadiem->toadoX=$request->toadoX;
        $diadiem->toadoY=$request->toadoY;
        $diadiem->loai_id=$request->loai_id;
        $diadiem->status=1;
        $flag=$diadiem->save();
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
        return response()->json(DiaDiem::find($id));
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
        $diadiem=DiaDiem::find($id);
        $diadiem->name=$request->name;
        $diadiem->toadoX=$request->toadoX;
        $diadiem->toadoY=$request->toadoY;
        $diadiem->loai_id=$request->loai_id;
        $diadiem->status=1;
        $flag=$diadiem->save();
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
        $diadiem=DiaDiem::find($id);
        $diadiem->status=0;
        $flag=$diadiem->save();
        return response()->json($flag);
    }
}

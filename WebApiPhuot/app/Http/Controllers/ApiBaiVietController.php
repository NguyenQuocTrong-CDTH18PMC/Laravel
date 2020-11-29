<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\BaiViet;
use App\DiaDiem;

class ApiBaiVietController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //Them ten loai bai viet
        //Them dia diem
        //Summary

      

        $data=BaiViet::with('user','diadiem')->get();

        return response()->json($data); 

        // $data = BaiViet::where('status', '<>', '-1')->orderBy('id', 'DESC')->get();
        
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
        $baiviet=new DiaDiem();
        $baiviet->title=$request->title;
        $baiviet->content=$request->content;
        $baiviet->image=$request->image;
        $baiviet->date=$request->date;
        $baiviet->diadiem_id=$request->diadiem_id;
        $baiviet->loaibaiviet_id=$request->loaibaiviet_id;
        $baiviet->user_id=$request->user_id;
        $baiviet->status=1;
        $flag=$baiviet->save();
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
        return response()->json(BaiViet::find($id));
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
        $baiviet=BaiViet::find($id);
        $baiviet->title=$request->title;
        $baiviet->content=$request->content;
        $baiviet->image=$request->image;
        $baiviet->date=$request->date;
        $baiviet->diadiem_id=$request->diadiem_id;
        $baiviet->loaibaiviet_id=$request->loaibaiviet_id;
        $baiviet->user_id=$request->user_id;
        $baiviet->status=1;
        $flag=$baiviet->save();
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
        $baiviet=BaiViet::find($id);
        $baiviet->status=0;
        $flag=$baiviet->save();
        return response()->json($flag);
    }
}

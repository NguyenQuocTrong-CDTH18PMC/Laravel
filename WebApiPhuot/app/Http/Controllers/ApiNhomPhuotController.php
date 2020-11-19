<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NhomPhuot;
use Validator;

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
        
        
        
        if($data->count() > 0) {
            return response()->json([
                'data' => $data,
                'message' => 'Hiển thị thành công'
            ], 200);
        }
        return response()->json(['message' => 'Không tìm thấy dữ liệu']);
        
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
        //create rules
        $rules = [
            'name' => 'required|min:3',
            'message' => 'required',
            'ngaydi' => 'required|after:tomorrow',
            'image' => 'required|image',
            'status' => 'required|numeric'
        ];

        
        //check validator
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            //400 bad request
            return response()->json($validator->errors(), 400);
        }
        //success
        $nhom_phuot = new NhomPhuot();
        $nhom_phuot->name = $request->name;
        $nhom_phuot->message = $request->message;
        //lay image
        $get_image = $request->file('image');
        if($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image = current(explode('.', $get_name_image));
    		$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path("uploads/"), $new_image);
            $nhom_phuot->image = $new_image;
            

            //get url
            $imageUrl = url('api/NhomPhuot/uploads/'.$new_image);
    	} 




        $nhom_phuot->ngaydi = $request->ngaydi;
        $nhom_phuot->status= $request->status;  
        $nhom_phuot->save();
        

        return response()->json([
            'data' => $nhom_phuot,
            'imageUrl' => $imageUrl,
            'message' => 'Thêm thành công!'
        ], 200);
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
            return response()->json(["message" => "Not found!"],404); 
        }
        $imageUrl = url('api/NhomPhuot/uploads/'.$data->image);
        return response()->json([
            'data' => $data,
            'imageUrl' => $imageUrl
        ], 200);
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
            return response()->json(["message" => "Not found to update!"],404); 
        }

        //create rules
        $rules = [
            'name' => 'required|min:3',
            'message' => 'required',
            'ngaydi' => 'required|after:tomorrow',
            'image' => 'required|image',
            'status' => 'required|numeric'
        ];
        //check validator
        $validator = Validator::make($request->all(), $rules);
        if($validator->fails()){
            //400 bad request
            return response()->json($validator->errors(), 400);
        }
        $nhom_phuot->name = $request->name;
        $nhom_phuot->message = $request->message;
        //lay image
        $get_image = $request->file('image');
        if($get_image) {
    		$get_name_image = $get_image->getClientOriginalName();
    		$name_image = current(explode('.', $get_name_image));
    		$new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path("uploads/"), $new_image);
            $nhom_phuot->image = $new_image;
            

            //get url
            $imageUrl = url('api/NhomPhuot/uploads/'.$new_image);
    	} 
        $nhom_phuot->ngaydi = $request->ngaydi;
        $nhom_phuot->status= $request->status;

        $nhom_phuot->save();
        if($nhom_phuot->count() > 0) {
            return response()->json([
                'data' => $nhom_phuot,
                'imageUrl' => $imageUrl,
                'message' => 'Cập nhật thành công'
            ], 200);
        }
        //401 fail
        return response()->json([
            'message' => 'Cập nhật thất bại'
        ], 401);
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
            return response()->json(["message" => "Not found!"],404); 
        }
        $nhom_phuot->status = -1;
        $nhom_phuot->save(); 
        return response()->json($nhom_phuot);
    }
}

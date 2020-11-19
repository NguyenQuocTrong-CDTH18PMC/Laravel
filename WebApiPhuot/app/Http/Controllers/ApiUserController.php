<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Database\Console\Migrations\StatusCommand;
use Illuminate\Http\Request;

class ApiUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(User::where('status',1)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=new User();
        $user->name=$request->name;
        $user->image=$request->image;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->fullname=$request->fullname;
        $user->status = 1;
        $user->password= bcrypt($request->password);
        $flag=$user->save();
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
        return response()->json(User::find($id));
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
        $user=User::find($id);
        $user->name=$request->name;
        $user->image=$request->image;
        $user->email=$request->email;
        $user->phone=$request->phone;
        $user->fullname=$request->fullname;
        $user->status = 1;
        $flag=$user->save();
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
        $user=User::find($id);
        $user->status=0;
        $flag=$user->save();
        return response()->json($flag);
    }
}

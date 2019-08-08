<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Info;
use App\User;
use App\ResearchTopic;
use  \Illuminate\Support\Facades\Validator;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //



        $info = Info::all();

        //print_r($info);
        return view('info.index',compact('info'));
        //return view('info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('info.create');
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

        //return $request->Name;

        //Info::create($request->all());

        //validate
        /*$request->validate([
            'Name'=>'required',
            'StudenID'=>'required',
            'Password'=>'required|min:6',
            'email'=>'required|email',
        ]);*/


        //store data
        $storeInfo = new Info();
        $storeInfo->user_id = $request->input('user_id');
        $storeInfo->name = $request->input('name');
        $storeInfo->studentID = $request->input('studentID');
        $storeInfo->password = $request->input('password');
        $storeInfo->email = $request->input('email');
        $storeInfo->save();


        //redirect
        return redirect('/info');
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

        $post = Info:: findOrFail($id);
        return view('info.edit',compact('post'));
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

        /*$request->validate([
            'Name'=>'required',
            'UserName'=>'required',
            'Password'=>'required|min:6',
            'email'=>'required|email',
        ]);*/

            $updateInfo= Info::findOrFail($id);
            $updateInfo->user_id = $request->input('user_id');
            $updateInfo->name = $request->input('name');
            $updateInfo->studentID = $request->input('studentID');
            $updateInfo->password = $request->input('password');
            $updateInfo->save();
            return redirect('/info');



        //return redirect('/info');
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
        $post = Info::find($id);
        $post->delete();
        return redirect('/info');
    }
}

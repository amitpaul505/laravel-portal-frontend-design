<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Group;
use App\Info;
class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $info = Group::all();

        //print_r($info);
        return view('group.index',compact('info'));
        //return view('info.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['users'] = Info::all();
        return view('group.create', $data);
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

        //dd($request->all());


        //die();
        $member=$request->input('member');

        foreach($member as $value){
        $storeInfo = new group();
    
        $storeInfo->GroupID = $request->input('GroupID');
        $storeInfo->Member= $value;
        $storeInfo->Status= $request->input('Status');
        $storeInfo->Deadline = $request->input('Deadline');
        $storeInfo->JudgementalView = $request->input('JudgementalView');
        

        $storeInfo->save();}

        


        return redirect('/group');
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
        $post = Group:: findOrFail($id);
        return view('group.edit',compact('post'));
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
        
        $updateInfo = Group::findOrFail($id);
        $updateInfo->GroupID = $request->input('GroupID');
        $updateInfo->Member= $request->input('Member');
        $updateInfo->Status= $request->input('Status');
        $updateInfo->Deadline = $request->input('Deadline');
        $updateInfo->JudgementalView = $request->input('JudgementalView');


        $updateInfo->save();
        return redirect('/group');

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
        $post = Group::find($id);
        $post->delete();
        return redirect('/group');


    }
}

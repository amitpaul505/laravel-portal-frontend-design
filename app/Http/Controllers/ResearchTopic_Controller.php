<?php

namespace App\Http\Controllers;

use App\Info;
use App\ResearchTopic;
use Illuminate\Http\Request;
use App\User;



class ResearchTopic_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $info = ResearchTopic::all();

        //print_r($info);
        return view('research.index',compact('info'));
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
        return view('research.create');
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

        $storeInfo = new ResearchTopic();
        $storeInfo->Name = $request->input('Name');
        $storeInfo->Domain_ID= $request->input('Domain_ID');
        $storeInfo->Semester = $request->input('Semester');
        $storeInfo->Type_ID = $request->input('Type_ID');
        $storeInfo->Level = $request->input('Level');
        $storeInfo->Description = $request->input('Description');
        $storeInfo->Faculty_ID = $request->input('Faculty_ID');
        $storeInfo->Status = $request->input('Status');
        $storeInfo->File_Status= $request->input('File_Status');

        $storeInfo->save();



        return redirect('/research');

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
        $post = ResearchTopic:: findOrFail($id);
        return view('research.edit',compact('post'));
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
        $updateInfo = ResearchTopic::findOrFail($id);
        $updateInfo->Name = $request->input('Name');
        $updateInfo->Domain_ID= $request->input('Domain_ID');
        $updateInfo->Semester = $request->input('Semester');
        $updateInfo->Type_ID = $request->input('Type_ID');
        $updateInfo->Level = $request->input('Level');
        $updateInfo->Description = $request->input('Description');
        $updateInfo->Faculty_ID = $request->input('Faculty_ID');
        $updateInfo->Status = $request->input('Status');
        $updateInfo->File_Status= $request->input('File_Status');

        $updateInfo->save();
        return redirect('/research');

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

        $post = ResearchTopic::find($id);
        $post->delete();
        return redirect('/research');
    }
}

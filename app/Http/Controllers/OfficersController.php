<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OfficerRequest;
use App\Http\Requests;
use App\Officer;
use App\Comment;   
use Session,Image,File,Validator;

class OfficersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     $officers = Officer::all();
     return view('officer.officer_index')->with('list_officer',$officers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
     return view('officer.officer_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OfficerRequest $request)
    {

        $file = $request->file('image');
        $image = Image::make($file);
        $image_location = public_path().'/image_upload/';

        $image->save($image_location.$file->getClientOriginalName());
        $image->resize(200,100);
        $image->save($image_location.'thumb'.$file->getClientOriginalName());

        $add = new Officer();
        $add->name = $request->input_name;
        $add->title_image = $request->input_title_image;
        $add->description_image = $request->input_description_image;
        $add->image = $file->getClientOriginalName();
        
        $add->save();

        Session::flash('message',$request->input_name.' your photo success to post');
        return redirect('officer-index');
        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $officers = Officer::find($id);
        $comments = Comment::all();
        return view('officer.officer_show')
        ->with('list_officer',$officers)
        ->with('list_comment',$comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $officers = Officer::find($id);
        return view('officer.officer_edit')->with('list_officer',$officers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(OfficerRequest $request, $id)
    {   

        $officers = Officer::find($id);
        $file = $request->file('image');
        $image_location = public_path().'/image_upload/';
        $deletefile = File::delete('image_upload/'.$officers->image);
        
        $image = Image::make($file);
        $image->resize(200,100);
        $image->save($image_location.'thumb'.$file->getClientOriginalName());
        
        if ($request->file('image')->isValid()) {
           $request->file('image')->move($image_location,$file->getClientOriginalName());        
        }else{
           echo "<script>alert('Failed');</script>";
           die();
           return back();

        }

        $officers->name = $request->input_name;
        $officers->title_image = $request->input_title_image;
        $officers->description_image = $request->input_description_image;
        $officers->image = $file->getClientOriginalName();
        
        $officers->save();

        // $officers->update($request->all());
        Session::flash('message',$request->name.' your photo success to update');
        return redirect('officer-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $officers = Officer::find($id);
        $delete_file = File::delete(['image_upload/'.$officers->image,'image_upload/thumb'.$officers->image, ]);
        $officers->delete();
        Session::flash('message',$officers->name.' your photo success to delete');
        return redirect('officer-index');
    }
}

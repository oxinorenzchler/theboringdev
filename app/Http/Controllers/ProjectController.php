<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Featured;
use Session;
use Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('created_at', 'desc')->get();
        $path = \Request::path();
        if(Auth::user()){
            return view('auth.projects', compact('projects'))->with('path', $path);
        }else{
            return view('pages.projects', compact('projects'))->with('path', $path);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.add_project');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        //Validation
        $rules = [
            'name' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'site' => 'required|string',
            'github' => 'string',
            'featured' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ];

        $this->validate($request, $rules);

        //Store to database
        $project = new Project;
        $project->name = $request->name;
        $project->slug = str_slug($request->name);
        $project->site = $request->site;
        $project->github = $request->github;
        $project->description = $request->description;
        $project->content = $request->content;

        $image = $request->file('featured');
        $image_name = $project->slug.'.'.$image->getClientOriginalExtension();
        $destination = "uploads/img/files/featured/";
        $image->move($destination, $image_name);

        $project->featured = $destination.$image_name;

        $project->save();
        Session::flash('success_msg', 'Data stored');

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->first();
        $path = \Request::path();
        return view('pages.project_page', compact('project'))->with('path',$path);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('auth.edit_project', compact('project'));
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
         //Validation
        $rules = [
            'name' => 'required|string',
            'description' => 'required|string',
            'content' => 'required|string',
            'site' => 'string',
            'github' => 'string',
            'featured' => 'image|mimes:jpg,jpeg,png|max:2048'
        ];

        $this->validate($request, $rules);

        $project = Project::find($id);

        $project->name = $request->name;
        $project->slug = str_slug($request->name);
        $project->site = $request->site;
        $project->github = $request->github;
        $project->description = $request->description;
        $project->content = $request->content;

        if($request->hasFile('featured')){
           $image = $request->file('featured');
           $image_name = $project->slug.'.'.$image->getClientOriginalExtension();
           $destination = "uploads/img/files/featured/";
           $image->move($destination, $image_name);

           $project->featured = $destination.$image_name;
       }

       $project->save();

       Session::flash('success_msg', 'Data Edited');

       return redirect()->back();

   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id);
        $project->delete();

       Session::flash('success_msg', 'Data deleted');
       return redirect()->back();
    
    }
}

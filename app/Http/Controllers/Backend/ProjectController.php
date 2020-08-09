<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Backend\Project;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $project = Project::paginate(10);
        return view('backend.project.index', compact('project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = request('image');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = imagePath();
        $image->move($path, $filename);

        $project = Project::create([
            'pj_name' => request('name'),   
            'pj_link' => request('link'),   
            'pj_image' => $filename,   
            'pj_fb_link' => request('fb-link'),   
            'pj_gh_link' => request('gh-link'),   
        ]);

        // dd($project);

        return redirect('admin/project')->with('message', 'Success');
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
        $project = Project::find($id);
        return view('backend.project.edit', compact('project'));
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
        $project = Project::find($id);

        $image = request('image');
        $filename = uniqid() . '.' . $image->getClientOriginalExtension();
        $path = imagePath();
        $image->move($path, $filename);

        $project->pj_name = request('name');
        $project->pj_link = request('link');
        $project->pj_image = $filename;
        $project->pj_fb_link = request('fb-link');
        $project->pj_gh_link = request('gh-link');

        $project->save();
        return redirect('admin/project')->with('message', 'success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $project = Project::find($id)->delete();
        return redirect('admin/project')->with('message', 'success');
    }
}

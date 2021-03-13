<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\Admin\Project;
use App\Models\Admin\ProjectCategories;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use StoreUpdateTrait, ImageProcess;
    /**
     * Display a listing of the project.
     *
     * @return view
     */
    public function index()
    {
        $projects = Project::all();

        return view('admin.project.index',compact('projects'));
    }

    /**
     * Show the form for creating a new project.
     *
     * @return view
     */
    public function create()
    {
        $categories = ProjectCategories::all();

        $project = new Project();

        return view('admin.project.create',compact('project', 'categories'));

    }

    /**
     * Store a newly created project in storage.
     *
     * @param  ProjectRequest $request
     * @param Project $project
     * @return Response
     */
    public function store(ProjectRequest $request, Project $project)
    {
        $this->storeData($request, $project);

        return redirect(route('admin.projects.index'))->with('success' , 'Project Saved Successfully') ;
    }

    /**
     * Show the form for editing the specified Project.
     *
     * @param  Project  $project
     * @return Response
     */
    public function edit(Project $project)
    {
        $categories = ProjectCategories::all();

        $selectedCategory = ProjectCategories::where('id', $project->category_id)->get()[0];

        return view('admin.project.edit',compact('project', 'categories', 'selectedCategory'));

    }

    /**
     * Update the specified Project in storage.
     *
     * @param  ProjectRequest  $request
     * @param  Project  $project
     * @return Response
     */
    public function update(ProjectRequest $request, Project $project)
    {
        $this->updateData($request, $project);

        return redirect(route('admin.projects.index'))->with('success' , 'Project Updated Successfully') ;

    }

    /**
     * Remove the specified project from storage.
     *
     * @param Project  $project
     * @return Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        return back()->with('success' , 'Project Deleted Successfully') ;

    }
}

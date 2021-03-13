<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProjectCategoryRequest;
use App\Http\Requests\Admin\ProjectRequest;
use App\Models\Admin\ProjectCategories;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class ProjectCategoriesController extends Controller
{
    use StoreUpdateTrait;
    /**
     * Display a listing of the Project Categories.
     *
     * @return View
     */
    public function index()
    {
        $projectCategories = ProjectCategories::all();

        return view('admin.project.category.index',compact('projectCategories'));

    }

    /**
     * Store a newly created resource in Project Categories.
     *
     * @param ProjectCategoryRequest $request
     * @param ProjectCategories $model
     * @return Response
     */
    public function store(ProjectCategoryRequest $request, ProjectCategories $model)
    {
        $this->storeData($request, $model);

        return back()->with('success' , 'Project Category Saved Successfully') ;

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  Request $request
     * @param  $id
     * @return Response
     */
    public function edit(Request $request, $id)
    {
        if ($request->ajax())
        {
            $data = ProjectCategories::find($id);

            return response()->json($data);
        }
    }

    /**
     * Update the specified Project Category in storage.
     *
     * @param  ProjectCategoryRequest $request
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectCategoryRequest $request)
    {
        $projectCategory = ProjectCategories::find($request->id);

        $this->updateData($request, $projectCategory);

        return back()->with('success' , 'Project Category Updated Successfully') ;

    }

    /**
     * Remove the specified Project Category from storage.
     *
     * @param $id
     * @return Response
     */
    public function destroy($id)
    {
        $projectCategories = ProjectCategories::find($id);

        $projectCategories->delete();

        return back()->with('success' , 'Project Category Deleted Successfully') ;

    }
}

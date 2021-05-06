<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Http\Resources\ProjectResource;
use App\Models\Admin\Category;
use App\Models\Admin\Project;
use App\Models\Admin\ProjectCategories;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use GeneralTrait;

    /** get All Categories
     * @return JsonResponse
     */
    public function categories(){

        $categories = ProjectCategories::all();
        $data = CategoryResource::collection($categories);
        try
        {
            return $this->returnData("data", $data, "All Categories Returned Successfully ");
        }
        catch (\Exception $exception)
        {
            return $this->returnError(500, 'Server Error');
        }
    }
    /**
     * Return All Projects in Json
     */
    public function allProjects(Request $request)
    {
        $projects = Project::paginate($request->total);

        $data = ProjectResource::collection($projects)->response()->getData(true);
         try
         {
            return $this->returnData("data", $data, "All Projects Returned Successfully ");
         }
         catch (\Exception $exception)
         {
            return $this->returnError(500, 'Server Error');
         }
    }

    public function categoryProject($id){

        $projects = Project::where('category_id', $id)->paginate(6);

        $data = ProjectResource::collection($projects)->response()->getData(true);
        try
        {
            return $this->returnData("data", $data, "All Projects Returned Successfully ");
        }
        catch (\Exception $exception)
        {
            return $this->returnError(500, 'Server Error');
        }
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Admin\Project;
use App\Traits\GeneralTrait;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    use GeneralTrait;

    /**
     * Return All Projects in Json
     */
    public function allProjects()
    {
        $projects = Project::paginate(6);

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

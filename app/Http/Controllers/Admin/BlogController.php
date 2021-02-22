<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\Admin\BlogRequest;
use App\Models\Admin\Blog;
use App\Http\Controllers\Controller;
use App\Traits\ImageProcess;
use App\Traits\StoreUpdateTrait;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    use ImageProcess, StoreUpdateTrait;

    /**
     * Display a listing of the Blogs.
     *
     * @return view
     */
    public function index()
    {
        $blogs = Blog::all();

        return view('admin.homepage.blog.index', compact('blogs'));
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param  BlogRequest  $request
     * @return Response
     */
    public function store(BlogRequest $request)
    {
        $model = new Blog();

        $this->storeData($request, $model);

        return back()->with('success' , 'News Saved Successfully') ;
    }
    /**
     * Remove the specified Blog from storage.
     *
     * @param  Blog  $blog
     * @return Response
     */
    public function destroy(Blog $blog)
    {
        $blog->delete();

        return back()->with('success' , 'News Saved Successfully') ;
    }
}

<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Blog\BlogRequest;
use App\Models\Blog\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    protected $blog;

    function __construct(Blog $blog)
    {
        $this->blog = $blog;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blogs = $this->blog->orderBy('created_at', 'asc')->get();

        return view('backend.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.blog.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogRequest $request)
    {
        if ($blog = $this->blog->create($request->data())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $blog);
            }
            return redirect()->route('blog.index');
        }
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
    public function edit(blog $blog)
    {
        //
        return view('backend.blog.edit', compact('blog'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BlogRequest $request, Blog $blog)
    {
        //
        if ($blog->update($request->data())) {
            $blog->fill([
                'slug' => $request->title,
            ])->save();
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $blog);
            }
        }
        return redirect()->route('blog.index')->withSuccess(trans('blog has been updated'));

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
        $blog = $this->blog->find($id);
        $blog->delete();
        return redirect()->route('blog.index')->withSuccess(trans('blog has been deleted'));
    }

    function uploadFile(Request $request, $blog)
    {
        $file = $request->file('image');
        $path = 'uploads/blog';
        $fileName = $this->uploadFromAjax($file, $path);
        if (!empty($blog->image))
            $this->__deleteImages($blog);

        $data['image'] = $fileName;
        $this->updateImage($blog->id, $data);

    }

    public function __deleteImages($subCat)
    {
        try {
            if (is_file($subCat->image_path))
                unlink($subCat->image_path);

            if (is_file($subCat->thumbnail_path))
                unlink($subCat->thumbnail_path);
        } catch (\Exception $e) {

        }
    }

    public function updateImage($blogId, array $data)
    {
        try {
            $blog = $this->blog->find($blogId);
            $blog = $blog->update($data);
            return $blog;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}


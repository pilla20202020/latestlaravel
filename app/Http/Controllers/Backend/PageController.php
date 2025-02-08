<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Page\StorePage;
use App\Models\Page\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class PageController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */

    protected $page;

    function __construct(Page $page)
    {
        $this->page = $page;

    }
    public function index()
    {
        $pages = $this->page->orderBy('created_at', 'desc')->get();

        return view('backend.page.index', compact('pages'));
    }

    /**
     * @return \Illuminate\View\View
     */
    // public function resourceIndex()
    // {
    //     $pages = Page::where('view', 'Resource')->get();

    //     return view('backend.resources.index', compact('pages'));
    // }

    /**
     * @return \Illuminate\View\View
     */
    public function create()
    {
        //$pages = $this->page->get();
        return view('backend.page.create');
    }

    /**
     * @param StorePage $request
     * @return mixed
     */
    public function store(StorePage $request)
    {

//        DB::transaction(function () use ($request)
//        {
//            $page = Page::create($request->pageFillData());
//
//            $this->uploadRequestImage($request, $page);
//        });

        if ($page = $this->page->create($request->pageFillData())) {
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $page);
            }
            if ($request->hasFile('banner_image')) {
                $this->uploadFile($request, $page);
            }
            return redirect()->route('page.index');


        }


    }

    /**
     * @param Page $page
     * @return \Illuminate\View\View
     */
    public function edit(Page $page)
    {
       // $pages = $this->page->get();
        return view('backend.page.edit', compact('page'));
    }

    public function update(StorePage $request, Page $page)
    {
        if ($page->update($request->pageFillData())) {
            $page->fill([
                'slug' => $request->title,
            ])->save();
            if ($request->hasFile('image')) {
                $this->uploadFile($request, $page);
            }
            if ($request->hasFile('banner_image')) {
                $this->uploadFile($request, $page);
            }
        }
//        DB::transaction(function () use ($request, $page)
//        {
//            $page->update($request->pageFillData());
//
//            $this->uploadRequestImage($request, $page);
//        });

        return redirect()->route('page.index')->withSuccess(trans('Page has been updated'));
    }

    public function destroy($id)
    {
        $page = $this->page->find($id);
        $page->delete();
        return redirect()->route('page.index')->withSuccess(trans('page has been deleted'));
    }

    function uploadFile(Request $request, $page)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            // Get the uploaded file
            $file = $request->file('image');

            // Define the destination path for the file
            $path = 'uploads' . DIRECTORY_SEPARATOR . 'page';  // Use DIRECTORY_SEPARATOR here

            // Create the directory if it doesn't exist
            $destinationPath = public_path($path);
            if (!file_exists($destinationPath)) {
                // Try creating the directory and log any issues
                $created = mkdir($destinationPath, 0755, true); // Creates directory with correct permissions
                if (!$created) {
                    Log::error('Failed to create directory: ' . $destinationPath);
                    return response()->json(['error' => 'Failed to create folder'], 500);
                }
            }

            // Generate a unique file name
            $fileName = time() . '_' . $file->getClientOriginalName();

            // Move the file to the public storage folder
            $file->move($destinationPath, $fileName);

            // Delete existing image if it exists
          if (!empty($page->image)) {
            $this->__deleteImages($page);
        }
            // Save the new file name in the database
            $data['image'] = $path . DIRECTORY_SEPARATOR . $fileName;
            $this->updateImage($page->id, $data);
        } else {
            // Handle case where no valid image is uploaded
            return response()->json(['error' => 'No valid image uploaded'], 400);
        }
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

    public function updateImage($pageId, array $data)
    {
        try {
            $page = $this->gallery->find($pageId);
            $page = $page->update($data);
            return $page;
        } catch (Exception $e) {
            //$this->logger->error($e->getMessage());
            return false;
        }
    }
}

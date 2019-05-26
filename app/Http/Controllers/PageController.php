<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Page;
use Auth;

class PageController extends Controller {

    public function showFront($slug = NULL)
    {
        if ($slug !== NULL):
            $page = Page::where($slug);
            return view('frontend.pages.' . $slug, compact('page'));
        else:
            return view('errors.401');
        endif;
    }

    public function index()
    {
        $pages = Page::latest()->paginate(10);
        return view('backend.pages.index', compact('pages'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'title' => 'required|max:100',
            'slug' => 'required|max:100',
            'description' => 'required',
        ]);

        $fileName = null;
        if ($request->hasFile('featured_image')) {
            $file = $request->file('featured_image');
            $fileName = md5($file->getClientOriginalName() . time()) . "." . $file->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $file->move($destinationPath, $fileName);
        }
        // Author Id
        $id = Auth::id();

        $page = new Page;
        $page->author_id = $id;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->excerpt = $request->excerpt;
        $page->status = $request->status;
        $page->description = $request->description;
        $page->featured_image = $fileName;

        $page->save();
        return redirect()->route('pages.index')
                        ->with('success', 'Page created successfully');
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
        $page = Page::find($id);
        return view('backend.pages.show', compact('page'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\blogs;
use App\Models\category;
use App\Models\subcategory;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = blogs::paginate('10');
        return view('backend.blog-list',compact('blogs'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = category::all();
        $subcategories = subcategory::all();
        return view('backend.blog',compact('categories','subcategories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'category' => 'required',
            'subcategory' => 'required',
            'title' => 'required',
            'disc' => 'required',
        ]);

                    
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
            $contact = new blogs;

            $contact->category_id = $request->category;
            $contact->subcategory_id = $request->subcategory;
            $contact->title = $request->title;
            $contact->discription = $request->disc;
            $contact->status = $request->status;
          
            $contact->photos=$imageName;
            $contact->save();
            session()->flash('success', 'new blog added successfully');
            return redirect()->back();

        }

    /**
     * Display the specified resource.
     */
    public function show(blogs $blog)
    {
        //
    }

    
    public function edit(string $id)
    {
        $id=decrypt($id);
        $blog=blogs::findOrfail($id);
        $categories=category::all();
        $subcategories=subcategory::all();

        return view('backend.edit_blog',compact('blog',"categories",'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, blogs $blog)
    {
        $request->validate([
            'category' => 'required',
            'subcategory' => 'required',
            'title' => 'required',
            'disc' => 'required',
        ]);
        $blog = blogs::find($request->id);
        $blog->category_id = $request->category;
        $blog->subcategory_id = $request->subcategory;
        $blog->title = $request->title;
        $blog->discription = $request->disc;
        $blog->status = $request->status;
        $blog->save();
        return redirect()->route('blogs.blog_list');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(blogs $blog,$id)
    {
        $blog=blogs::where('id',$id)->delete();
        return redirect()->route('blogs.blog_list');
       
    }
}
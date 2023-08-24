<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = category::paginate('10');
        return view('backend.category_list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'status' => 'required',
        ]);


        $category = category::where('name', $request->category)->first();
        // var_dump($category);
        // die;
        if ($category == NULL) {
            $imageName=time().'.'.$request->photo->extension();
            $request->photo->move(public_path('img'),$imageName);
            $contact = new category;
            $contact->name = $request->category;
            $contact->slug = Str::slug($request->category);
            $contact->status = $request->status;
            $contact->photos=$imageName;
            // $request['slug'] = category::slug($request->name);

            $contact->save();
            session()->flash('success', 'new subcategory added successfully');
            return redirect()->back();
        }
        session()->flash('error', 'category already exist');
        return redirect()->back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id=decrypt($id);
        $categories=category::findOrfail($id);
       

        return view('backend.edit_category',compact("categories"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, category $category)
    {
        $request->validate([
            'category' => 'required',
        ]);
        // $imageName=time().'.'.$request->photo->extension();
        // $request->photo->move(public_path('img'),$imageName);
        $category = category::find($request->id);
        $category->name = $request->category;
        $category->status = $request->status;
        // $category->photos=$imageName;
        $category->slug = Str::slug($request->category);

        // $request['slug'] = category::slug($request->name);
        $category->save();
        return redirect()->route('categories.category');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(category $category, $id)
    {
        $category=category::where('id',$id)->delete();
        return redirect()->route('categories.category');

    }
}
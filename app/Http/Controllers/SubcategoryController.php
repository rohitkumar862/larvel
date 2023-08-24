<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\Subcategory;
use Illuminate\Support\Str;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
       
        $subcategories = subcategory::paginate('10');
        return view('backend.sub_category_list',compact('subcategories'));
        
    }
    public function subcategory(){
        $categories = category::all();
        return view('backend.sub-category',compact('categories'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = subcategory::all();
        return view('live-pro.subcategory',compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'status' => 'required',
        ]);
        // $imageName=time().'.'.$request->photo->extension();
        // $request->photo->move(public_path('img'),$imageName);
            $contact = new Subcategory;
            $contact->category_id = $request->category;
            $contact->title = $request->title;
            $contact->status = $request->status;
            // $contact->photos=$imageName;

            $contact->slug = Str::slug($request->title);

            $contact->save();
            session()->flash('success', 'new sub category added successfully');
            return redirect()->back();
       
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $categories = subcategory::all();
        return view('live-pro.enquiry',compact('categories'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $id=decrypt($id);
        $subcategories=Subcategory::findOrfail($id);
        $categories=category::all();
       

        return view('backend.edit_subcategory',compact("subcategories",'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subcategory $subcategory)
    {
        $request->validate([
            'category' => 'required',
            'title' => 'required',
        ]);
        $imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('img'),$imageName);
        $subcategory = Subcategory::find($request->id);
        $subcategory->category_id = $request->category;
        $subcategory->title = $request->title;
         $subcategory->slug = Str::slug($request->title);
         $subcategory->status = $request->status;
         $subcategory->photos=$imageName;

         
        // $request['slug'] = category::slug($request->title);
        
        $subcategory->save();
        return redirect()->route('subcategories.subcategories');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subcategory $subcategory,$id)
    {
        $subcategory=Subcategory::where('id',$id)->delete();
        return redirect()->route('subcategories.subcategories');

    }
}
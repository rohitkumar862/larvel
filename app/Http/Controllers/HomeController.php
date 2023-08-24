<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use App\Models\subcategory;
use App\Models\blogs;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     *
     */
    public function index()
    {
        $categories= category::all();
        $subcategories= subcategory::all();
        $blogs= blogs::all();
        return view('live-pro.home',compact('categories','subcategories','blogs'));
    }


    public function category($slug){
        $category = category::where('slug',$slug)->first();

        if($category)
        {
            $products = subcategory::where('category_id',$category->id)->where('status',1)->get();
            return view('live-pro.subcategory',compact('category','products'));

        }else{
            abort(404);
        }


    }
    public function enquiry($id){
        $category = subcategory::where('id',$id)->first();

        $products = subcategory::where('id',$category->id)->where('status',1)->get();

        return view('live-pro.enquiry',compact('products'));

    }
}

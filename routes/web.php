<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubcategoryController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ForntendController;

/*


|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/contact', function () {
    return view('live-pro.contact');
});

Route::get('/about', function () {
    return view('live-pro.about');
});


Route::get('/adminn', function () {
    return view('fornend.admin');
});



// Route::get('/category', function () {
//     return view('backend.category');
// });


// Route::get('/sub-category', function () {
//     return view('backend.sub-category');
// });
route::prefix('admin')->group(function(){

    Route::get('add-category',[CategoryController::class,'create'])->name('categories.add_new_category');

    Route::get('add-subcategory',[SubcategoryController::class,'subcategory'])->name('subcategories.add_new_subcategory');
    
    
    Route::get('category_list',[CategoryController::class,'index'])->name('categories.category');
    
    Route::get('subcategory_list',[SubcategoryController::class,'index'])->name('subcategories.subcategories');
    Route::get('Blog-List',[BlogsController::class,'index'])->name('blogs.blog_list');
    Route::get('Add-blog',[BlogsController::class,'create'])->name('blogs.add-blog');
    Route::get('delete/{id}',[BlogsController::class,'destroy'])->name('blogs-delete');
    Route::get('subcategory-delete/{id}',[SubcategoryController::class,'destroy'])->name('delete-subcategory');
    Route::get('delete-category/{id}',[CategoryController::class,'destroy'])->name('delete-category');
    Route::get('/', function () {
        return view('backend.dashboard');
    });


    Route::get('/dashboard', function () {
        return view('backend.dashboard');
    });
});

Route::resource('categories',CategoryController::class);

Route::resource('subcategories',SubcategoryController::class);
Route::resource('sliders',SliderController::class);

Route::resource('blogs',BlogsController::class);





Route::post('category',[CategoryController::class,'store'])->name('save-category');

Route::POST('subcategory',[SubcategoryController::class,'store'])->name('save-sub-category');


Route::POST('blog',[BlogsController::class,'store'])->name('save-blog');
Route::post('update',[BlogsController::class,'update'])->name('update-blog');
Route::post('update-category',[CategoryController::class,'update'])->name('update-category');
Route::post('update-subcategory',[SubcategoryController::class,'update'])->name('update-subcategory');



Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('category/{slug}',[HomeController::class,'category'])->name('category.slug');
Route::get('enquiry/{id}',[HomeController::class,'enquiry'])->name('enquiry.id');

Route::get('dashboardd',[ForntendController::class,'index'])->name('dashboard');


Route::get('/contact_us', function () {
    return view('fornend.contact');
});
Route::get('subcategory',[SubcategoryController::class,'create'])->name('subcategory');
Route::get('enquiry',[SubcategoryController::class,'show'])->name('enquiry');

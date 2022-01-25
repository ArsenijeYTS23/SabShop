<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminCategorieController extends Controller
{
    function show(){
   $categories= \App\Category::get();

return view('admin\admin_category',compact('categories'));

    }
    function update_cat(Request $request){

 $category= \App\Category::where('id',$request->id)->first();
 $category->title=$request->category;
 $category->number=$request->number;


 $category->save();
 return back();

    }
    function new_cat(Request $request){

 $category= new \App\Category;
 $category->title=$request->category;
 $category->number=$request->number;


 $category->save();
 return back();

    }
    function show_subcat(){
   $subcategories= \App\Subcategory::get();

return view('admin\admin_subcategory',compact('subcategories'));

    }
    function update_subcat(Request $request){

 $subcategory= \App\Subcategory::where('id',$request->id)->first();
 $subcategory->title=$request->subcategory;
 $subcategory->category_id=$request->category;


 $subcategory->save();
 return back();

    }
    function new_subcat(Request $request){

 $subcategory= new \App\Subcategory;
 $subcategory->title=$request->subcategory;
 $subcategory->category_id=$request->category;


 $subcategory->save();
 return back();

    }
    function show_subsubcat(){
   $subsubcategories= \App\Subsubcategory::get();

return view('admin\admin_subsubcategory',compact('subsubcategories'));

    }
    function update_subsubcat(Request $request){

 $subsubcategory= \App\Subsubcategory::where('id',$request->id)->first();
 $subsubcategory->title=$request->subsubcategory;
 $subsubcategory->subcategory_id=$request->subcategory;


 $subsubcategory->save();
 return back();

    }
    function new_subsubcat(Request $request){

 $subsubcategory= new \App\Subsubcategory;
 $subsubcategory->title=$request->subsubcategory;
 $subsubcategory->subcategory_id=$request->subcategory;


 $subsubcategory->save();
 return back();

    }
}

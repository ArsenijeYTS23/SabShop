<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminListController extends Controller
{
  function home($category=0, $subcategory=0, $subsubcategory=0){
     $url = request()->url();
     if($subsubcategory !== 0){
     $ssc=\App\Subsubcategory::where('title',str_replace('_',' ',$subsubcategory))->first();
     $products= \App\Product::where('subsubcategory_id',$ssc->id)->paginate(50);
     $showing= $products->count();
     $categories=0;
     }

    elseif($subcategory !== 0 && $subsubcategory==0){
      $sc=\App\Subcategory::where('title',str_replace('_',' ',$subcategory))->first();
      $products=    \App\Product::where('subcategory_id',$sc->id)->paginate(50);
      $showing= $products->count();
      $categories=$sc->subsubcategory;
    }

    elseif($category !== 0 && $subcategory==0){
      $cat=    \App\Category::where('title',str_replace('_',' ',$category))->first()->id;
      $products=    \App\Product::where('category_id',$cat)->paginate(50);
// $products=    \App\Category::where('title',str_replace('_',' ',$category))->first()->product;
$showing= $products->count();
$categories=  \App\Category::where('title',str_replace('_',' ',$category))->first()->subcategory;

}else{
$products=\App\Product::paginate(50);
$showing= $products->count();
$categories=  \App\Category::get();
}

// return str_replace('_',' ',$category);


    return view('admin_list',compact('products','categories','url','showing'));
  }
}

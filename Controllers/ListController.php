<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListController extends Controller
{
    function home($category=0, $subcategory=0, $subsubcategory=0){
       $url = request()->url();
       if($subsubcategory !== 0){
       $ssc=\App\Subsubcategory::where('title',str_replace('_',' ',$subsubcategory))->first();
       $products= \App\Product::where('subsubcategory_id',$ssc->id)->orderBy('redosled', 'desc');
       $showing= $products->count();
       $products=$products->paginate(18);
       $categories=0;
       }

      elseif($subcategory !== 0 && $subsubcategory==0){
        $sc=\App\Subcategory::where('title',str_replace('_',' ',$subcategory))->first();
        $products=    \App\Product::where('subcategory_id',$sc->id)->orderBy('redosled', 'desc');
        $showing= $products->count();
        $products=$products->paginate(18);
        $categories=$sc->subsubcategory;
      }

      elseif($category !== 0 && $subcategory==0){
        $cat=    \App\Category::where('title',str_replace('_',' ',$category))->first()->id;
        $products=    \App\Product::where('category_id',$cat)->orderBy('redosled', 'desc');
        $showing= $products->count();
        $products=$products->paginate(18);
        $categories=  \App\Category::where('title',str_replace('_',' ',$category))->first()->subcategory;

}else{
  $products=\App\Product::orderBy('redosled', 'desc')->paginate(18);
  $showing= \App\Product::get()->count();
  $categories=  \App\Category::get();
}

 // return str_replace('_',' ',$category);
$aaa= explode('/',$url);
  $bbb= end($aaa);
  $title=   str_replace('_',' ',$bbb);

      return view('list_products',compact('products','categories','url','showing','title'));
    }

    function akcija(){
      $url = request()->url();
      $products=\App\Product::where('akcija','!=',1)->orderBy('redosled', 'desc')->paginate(18);
      $showing= \App\Product::where('akcija','!=',1)->get()->count();
      $categories=  '';
      $title='Akcija';



    return view('list_products',compact('products','categories','url','showing','title'));
    }





}

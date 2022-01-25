<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\KursnaLista;
class ProductController extends Controller
{
    function home($id){
      $title= str_replace('_',' ',$id);

      $product= Product::where('title',$title)->with('image_product')->first();
      $kurs= KursnaLista::first()->dinar;

      if(Product::where('subsubcategory_id',$product->subsubcategory_id)->get()->count() > 0){
          $related= Product::where('subsubcategory_id',$product->subsubcategory_id)->get()->take(8);
        }
        elseif(Product::where('subcategory_id',$product->subcategory_id)->get()->count() > 0){
         $related= Product::where('subcategory_id',$product->subcategory_id)->get()->take(8);
        }else
        {
         $related= Product::where('category_id',$product->category_id)->get()->take(8);
        }


        return view('product',compact('product','kurs','related'));
    }







    function dodaj(Request $request){
  $ses=   $request->all();
     $request->session()->push('ses', $ses);
      collect(\Session::get('ses'));

  //    $request->session()->flush();
  return back();
    }
}

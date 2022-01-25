<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use File;

class AdminProductController extends Controller
{
    function show($product){
  // return public_path();
      $title= str_replace('_',' ',$product);

      $product= Product::where('title',$title)->first();
// return $product->color->where('id',4);
      return view('admin/edit_product',compact('product'));

    }

     function update(Request $request){


       $request->all();
       $product= \App\Product::where('id',$request->id)->first();
       $product->title=$request->product;
       $product->preporucena_stampa=$request->stampa;
       $product->category_id=$request->category;
       $product->sifra=$request->sifra;
       $product->materijal=$request->materijal;
       if(is_numeric($request->cena)){
       $product->cena=$request->cena;
     }else{
       $product->cena=0;
     }
       $product->subcategory_id=$request->subcategory;
       $product->subsubcategory_id=$request->subsubcategory;
       $product->akcija=$request->akcija;
       $product->redosled=$request->redosled;

       $product->save();
       //  $request->session()->flash('message', $poruka);
       \App\ColorProduct::where('products_id',$product->id)->delete();
       if($request->color){
       $boje= $request->color;
       foreach($boje as $boja){
         $color_product= new \App\ColorProduct;
         $color_product->products_id= $product->id;
         $color_product->colors_id= $boja ;
         $color_product->save();
       }
       }
       return back();


     }


    function erase($product){
// $flight->delete();
 // \File::delete(public_path().'/images/products/'.$filename);
       $product= Product::where('id',$product)->first();
    $images=   \App\ImageProduct::where('product_id',$product->id)->get();
        foreach ($images as $image){
          File::delete('./'.$image->image);
        }
       \App\ColorProduct::where('products_id',$product->id)->delete();
        \App\ImageProduct::where('product_id',$product->id)->delete();
        Product::where('id',$product->id)->delete();
    }
}

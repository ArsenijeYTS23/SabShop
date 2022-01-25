<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
 use Illuminate\Support\Facades\Mail;

class SearchController extends Controller
{
  function home(Request $request){

   $request->search_product;
  $kurs= \App\KursnaLista::first()->dinar;
  $product=\App\Product::where('title','LIKE',"%$request->search_product")->orWhere('sifra',$request->search_product)->first();
  if($product){
  $related= \App\Product::where('subsubcategory_id',$product->subsubcategory_id)->get();
}else{
  $related='';
}

  return view('product',compact('product','kurs','related'));
  }
  function admin(Request $request){

   $request->search_product;

  $product=\App\Product::where('title','LIKE',"%$request->search_product")->orWhere('sifra',$request->search_product)->first();


  return view('admin/edit_product',compact('product'));
  }
}

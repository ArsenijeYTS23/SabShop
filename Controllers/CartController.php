<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\KursnaLista;

class CartController extends Controller
{
  function home(){
if(\Session::get('ses')){
    $kurs= KursnaLista::first()->dinar;
      $sesija=    \Session::get('ses');

   foreach($sesija as $s){
     $total[]=Product::where('id',$s['product_id'])->first()->cena * $s['num-product'] * $kurs;
   }
     $total=collect($total)->sum();

     $products=Product::all();

return view('korpa',compact('sesija','kurs','products','total'));
}else{
return view('korpa');
}




}




function remove_from_cart($k){
//   $e=\Session::get('ses')[$k];
  \Session::pull('ses.'.$k);
   return back();
}
}

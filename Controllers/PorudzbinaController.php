<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PorudzbinaController extends Controller
{
    function store(Request $request){
   $sesija=    \Session::get('ses');

  $porudzbina= new \App\Porudzbine;
  $porudzbina->name=$request->name;
  $porudzbina->firma=$request->firma;
  $porudzbina->telefon=$request->telefon;
  $porudzbina->adresa=$request->adresa;
  $porudzbina->email=$request->email;
  $porudzbina->total=$request->total;

  $porudzbina->save();

  foreach($sesija as $ses){

  $porudzbina_product= new \App\PorudzbineProduct;
  $porudzbina_product->product_id= $ses['product_id'];
  if(isset($ses['color'])){
  $porudzbina_product->color= $ses['color'];
}else{
  $porudzbina_product->color="";
}
  $porudzbina_product->num_product= $ses['num-product'];
  $porudzbina_product->porudzbina_id= $porudzbina->id;
  $porudzbina_product->save();

}
  \Session::forget('ses');
    return back();
    }

    function show(){

$porudzbine=  \App\Porudzbine::where('prikazi',1)->get()->sortByDesc('id');

         return view('admin/porudzbine',compact('porudzbine'));
    }
    function obrisi($porudzbina){
   \App\PorudzbineProduct::where('porudzbina_id',$porudzbina)->delete();
   \App\Porudzbine::where('id',$porudzbina)->delete();
   return back();
    }
    function arhiviraj($porudzbina){
     $porudzbina= \App\Porudzbine::where('id',$porudzbina)->first();
     $porudzbina->prikazi="";
     $porudzbina->save();
   return back();
    }
}

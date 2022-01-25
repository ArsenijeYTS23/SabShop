<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;

class FormController extends Controller
{
  function home(){



    return view('forma');
  }
  public function store(Request $request)
{

  $validator = Validator::make($request->all(), [
                  'product'       =>'required',


                  'category'    =>'required'
              ]);

        //      return $request->all();
  if ($validator->fails()) {
   return "eroro";
  //    $request->session()->flash('message', 'error! please try again');
  } else {
  $request->all();
  $product= new \App\Product;
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

  $product->save();
//  $request->session()->flash('message', $poruka);
if($request->color){
  $boje= $request->color;
  foreach($boje as $boja){
    $color_product= new \App\ColorProduct;
    $color_product->products_id= $product->id;
    $color_product->colors_id= $boja ;
    $color_product->save();
  }
}


  if($request->hasFile('images')){
      //    \File::makeDirectory('images/city/'.$city->id, $mode = 0777, true, true);
        $images      = $request->file('images');
        foreach($images as $image){

      $slika= new \App\ImageProduct;
      $slika->product_id=$product->id;
      $slika->image=1;
      $slika->number=1;
      $slika->text2=1;
      $slika->save();

      //  $filename    = $image->getClientOriginalName();
      $filename=$slika->id.'.jpg';
         Image::make($image)->resize(576, 432)->save('./images/products/'.$filename);
        $slika->image='/images/products/'.$filename;
        $slika->save();
         }
       }
       }
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Banner;
use App\Usluge;
use App\Product;
use App\KursnaLista;
use App\Intagram;

class HomePageController extends Controller
{
    function home(){

    //  return Product::first()->image_product;
    $insta = \App\Pen::first();
       $dinar=KursnaLista::first();
       $products= Product::with('image_product')->get()->sortByDesc('redosled')->take(16);
       $usluges= Usluge::get()->take(3);
      $banners= Banner::all();
      $instagram=Intagram::all();
      return view('home',compact('banners','usluges','products','dinar','instagram'));
    }
}

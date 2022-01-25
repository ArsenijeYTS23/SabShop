<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usluge;
use View;

class UslugeController extends Controller
{
    function index($id){
    $usluga= Usluge::where('title',str_replace('_',' ',$id))->first();
     return view('usluga',compact('usluga'));

    }
    function list(){
      $products=\App\Usluge::get();
      $showing= $products->count();
      $categories= 0;

        return view('usluge_list',compact('products','showing'));
    }
}

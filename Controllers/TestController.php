<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    function home(){
      $rrr= 'aaaaaaaa';
      return view('index',compact('rrr'));
    }
}

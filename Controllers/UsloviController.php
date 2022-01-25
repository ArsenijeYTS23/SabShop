<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsloviController extends Controller
{
    function uslovi(){

      $uslovi=\App\Uslovi::first();
      return view('servis.uslovi',compact('uslovi'));
    }
    function kako_kupiti(){

      $uslovi=\App\Uslovi::first();
      return view('servis.kako_kupiti',compact('uslovi'));
    }
    function nacini_placanja(){

      $uslovi=\App\Uslovi::first();
      return view('servis.nacini_placanja',compact('uslovi'));
    }
    function politika_privatnosti(){

      $uslovi=\App\Uslovi::first();
      return view('servis.politika_privatnosti',compact('uslovi'));
    }
    function pravo_na(){

      $uslovi=\App\Uslovi::first();
      return view('servis.pravo_na_odustajanje',compact('uslovi'));
    }
    function povracaj_sredstava(){

      $uslovi=\App\Uslovi::first();
      return view('servis.povracaj_sredstava',compact('uslovi'));
    }
    function pravo_na_odustajanje(){

      $uslovi=\App\Uslovi::first();
      return view('servis.pravo_na_odustajanje',compact('uslovi'));
    }
    function reklamacije(){

      $uslovi=\App\Uslovi::first();
      return view('servis.reklamacije',compact('uslovi'));
    }
    function uslovi_koriscenja(){

      $uslovi=\App\Uslovi::first();
      return view('servis.uslovi_koriscenja',compact('uslovi'));
    }
    function zamena_velicine_i_zamena_artikla_za_drugi(){

      $uslovi=\App\Uslovi::first();
      return view('servis.zamena_velicine_i_zamena_artikla_za_drugi',compact('uslovi'));
    }
}

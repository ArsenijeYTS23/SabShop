<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use File;

class AdminBanerController extends Controller
{
    function show(){
    $baners=   \App\Banner::all();


return view('admin\admin_baner',compact('baners'));
    }
    function update(Request $request){

 $baner= \App\Banner::where('id',$request->id)->first();
   $baner->title=$request->title;
   $baner->text1=$request->text1;
   $baner->text2=$request->text2;
   $baner->text3=$request->text3;
   $baner->link=$request->link;
   $baner->save();

return    back();


    }
    function delete_baner_img($baner){
      File::delete('./images/banner/'.$baner.'.jpg');
      $banner= \App\Banner::where('id',$baner)->first();
      $banner->image='';
       $banner->save();
    return back();

    }
  function add_baner_img(Request $request){
if($request->hasFile('image')){
     $filename=$request->id.'.jpg';
       Image::make($request->file('image'))->resize(1920, 570)->save('./images/banner/'.$filename);

       $banner= \App\Banner::where('id',$request->id)->first();
       $banner->image='images/banner/'.$request->id.'.jpg';
        $banner->save();
}
return back();

  }





}

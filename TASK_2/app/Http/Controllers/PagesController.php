<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
      return view('pages/home');
    }

    public function product() {
        return view('pages/product');
    }

    public function teams() {
      return view('pages/teams');
    }

    public function about() {
      return view('pages/about');
    }

    public function contact() {
      return view('pages/contact');
    }
    public function myProfile(){
        $name = "<span style='color:red'>Tanvir Ahmed</span>";
        $id = "<span style='color:red'>12-234-1</span>";
        $dob = "12323232";
        $names = array("Tanvir","Sabbir","karim","Rahim");
        return view('myprofile')
        ->with('name',$name)
        ->with('id',$id)
        ->with('dob',$dob)
        ->with('names',$names);
    }
}
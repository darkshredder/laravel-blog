<?php
namespace App\Http\Controllers;

class PagesController extends Controller {
    
    public function getIndex(){
        return view('/pages.welcome');
    }

    public function getAbout(){
        return view('/pages.about');
    }

    public function getContact(){
        $first ="Yash";
        $last = "Srivastava";
        $full = $first." ".$last;
        return view('/pages.contact')->with("fullname",$full);
    }


    
}
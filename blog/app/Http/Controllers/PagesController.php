<?php
namespace App\Http\Controllers;
use App\Post;

class PagesController extends Controller {
    
    public function getIndex(){
        $posts = Post::orderBy('updated_at','desc')->limit(4)->get();
        return view('/pages.welcome')->withPosts($posts);
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
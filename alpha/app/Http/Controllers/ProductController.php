<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $x = "Using COMPACT method..";
        return view('home', compact('x'));
    }

    public function usingwith(){
        $x = "Using WITH method";
        return view('home')->with('x', $x);
    }

    public function usingview(){
      /*  $x = [
            "name"=>"Lara",
            "age" => "23"

        ];

        */
        
        //
        $x = " Using the VIEW methos";
        return view('home', ['x'=>$x]);
    }

}

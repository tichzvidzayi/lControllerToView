<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $name = "Using COMPACT method..";
        return view('home', compact('x'));
    }

    public function usingwith(){
        $name = "Using WITH method";
        return view('home')->with('x', $name);
    }

    public function usingview(){
        $data = [
            "name"=>"Lara",
            "age" => "23"

        ];
        return view('home', ['x'=>$data]);
    }

}

<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $name = "something";
        return view('home', compact('name'));
    }

    public function usingwith(){
        $name = "alien";
        return view('home')->with('name', $name);
    }

    public function usingview(){
        $data = [
            "name"=>"Lara",
            "age" => "23"

        ];
        return view('home', ["data"=>$data]);
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Test extends Controller
{
    public function first(){
        $data["title"] = "Hello Laravel";
        $data["message"] = "Belajar Laravel itu mudah";
        return view("test_view",$data);
    }

public function form(){
    return view("form_view");
}
public function send(Request $request){
    $nama = $request->nama;
    $email = $request->email;
    $telepon = $request->telepon;

    return "Hai, my name is ".$nama.",
            you can call me on ".$telepon." or send me mail at ".$email;
}
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(string $id){
        $name = "Donald Trump";
        $age =  "75";

        $data = [
            "id" => $id,
            "name" => $name,
            "age" => $age
        ];

        $cookie = cookie(
            $name = "access_token",
            $value = "123-XYZ",
            $minutes = 1,
            $path = $_SERVER['SERVER_NAME'],
            $secure = false,
            $httpOnly = true

        );

        return response($data,200)->cookie($cookie);



    }
}

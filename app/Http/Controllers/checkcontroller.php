<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class checkcontroller extends Controller
{
    function display()
    {
        $data = Http::get("https://reqres.in/api/users?page=1");
        
        return view('data',['collection'=>$data['data']]);
    }
}

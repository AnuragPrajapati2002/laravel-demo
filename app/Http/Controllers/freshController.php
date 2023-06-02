<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class freshController extends Controller
{
    function show()
    {
        return User::all();
    }

}



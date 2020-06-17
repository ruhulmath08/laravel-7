<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    //pass value from controller
    function index(){
        return view('simple', ['name' => 'Md. Ruhul Amin']);
    }

    //https://www.youtube.com/watch?v=n-Fea5ikTjk&list=PL8p2I9GklV46twRyl207h5LcsdjB9S9B0&index=6
}

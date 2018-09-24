<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function user($userId,$userId_2){
        echo $userId;
        echo $userId_2;
    }
    //
}

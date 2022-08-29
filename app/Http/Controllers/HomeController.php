<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Travel;

class HomeController extends Controller
{
    public function home(){
        
        return view('home');
    }
    public function travels(){
        $travels = Travel::all();
        $data = [
            'travels' => $travels
        ];
        return view('travels', $data);
    }
}

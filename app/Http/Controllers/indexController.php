<?php

namespace App\Http\Controllers;
use App\Models\Insert;

use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index(){
        $data = Insert::all();
        return view('index',['data'=>$data]);
    }
}

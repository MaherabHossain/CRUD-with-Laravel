<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert;

class insertController extends Controller
{
    public function process( Request $request ){
        $request->validate([
            'name' => 'required'
        ]);
        $insert = new Insert;
        $insert->frutes_name = $request->input('name');
        $insert->save();
        return redirect()->to('/');
        
    }
}

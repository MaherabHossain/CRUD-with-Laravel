<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert;

class editController extends Controller
{
    public function editView( $id){
        $data = Insert::find($id);
        //return view('edit',compact('datas'));
        return view('edit',['data' => $data]);
    }
    public function edit( Request $request ){
    	$request->validate([
            'name' => 'required'
        ]);
    	$update = Insert::find($request->id);
    	$update->frutes_name = $request->name;
    	$update->save();
    	return redirect()->to('/');
    }
}

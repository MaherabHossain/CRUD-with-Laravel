<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Insert;
class deleteController extends Controller
{
    public function delete( Request $request ){
       $delete = Insert::find($request->id);
       $delete->delete();
       return redirect()->to('/');
    }
}

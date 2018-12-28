<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesIdController extends Controller
{
    //
    public function getPage($page,$id = false){
        return view('pages.'.$page, ['id' => $id]);
    }
}

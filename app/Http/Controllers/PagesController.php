<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function getPage($page){
        $id = 0;
        return view('pages.'.$page, ['id' => $id]);
    }
}

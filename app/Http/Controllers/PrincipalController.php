<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    //principal

    public function principal()
    {
        return view('site.principal');
    }
}

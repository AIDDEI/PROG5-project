<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpController extends Controller
{
    public function help(){
        $help = "help...";
        return view('help', compact('help'));
    }
}

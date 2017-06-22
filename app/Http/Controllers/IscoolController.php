<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IscoolController extends Controller
{
    public function index(){
        $nome = "Cleiton";
        return view('iscool',['nome'=>$nome]);
    }
}

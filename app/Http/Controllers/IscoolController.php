<?php

namespace App\Http\Controllers;
use App\Turma;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IscoolController extends Controller
{
    public function index(){
        $turmas = Turma::all();
        return view('turmas',['turmas'=>$turmas]);
    }
}

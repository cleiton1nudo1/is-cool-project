<?php

namespace App\Http\Controllers;
use App\Aluno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IscoolController extends Controller
{
    public function index() {
        $alunos = Aluno::all();
        return view('iscool.index', ['alunos'=>$alunos]);
    }

    public function create() {
        return view('iscool.create');
    }
}

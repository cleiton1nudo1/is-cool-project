@extends('views.app')

@section('content')
    <div class="container">
        <h1>Alunos</h1>
        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Sexo</th>
                <th>Matricula</th>
                <th>Data Nascimento</th>
            </tr>
            </thead>
            <tbody>
            @foreach($alunos as $aluno)
                <tr>
                    <td>{{ $aluno->nome }}</td>
                    <td>{{ $aluno->sexo }}</td>
                    <td>{{ $aluno->matricula }}</td>
                    <td>{{ $aluno->dataNascimento }}</td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>
@endsection

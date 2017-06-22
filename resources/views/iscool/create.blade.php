@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Aluno</h1>

        {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('matricula', 'Matricula: ') !!}
            {!! Form::text('matricula',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('dataNascimento', 'Data de Nascimento: ') !!}
            {!! Form::date('dataNascimento',null,['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('sexo', 'Sexo: ') !!}
            {!! Form::select('sexo',array('Masculino' =>'masculino', 'Feminino' =>'feminino'),'Masculino',['class'=>'form-control']) !!}
        </div>

        {!! Form::close() !!}
    </div>
@endsection
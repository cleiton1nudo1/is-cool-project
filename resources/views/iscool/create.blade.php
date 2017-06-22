@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Aluno</h1>

        {!! Form::open() !!}
        <div class="form-group">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome',null,['class'=>'form-control']) !!}
        </div>
        {!! Form::close() !!}
    </div>
@endsection
@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>

    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}

        {!! Form::label('task', 'タスク:') !!}
        {!! Form::text('task') !!}
        <br>
        <br>
        {!! Form::label('deadline', '何時まで？？:') !!}
        {!! Form::date('deadline') !!}
        <br>
        <br>
        {!! Form::submit('登録') !!}

    {!! Form::close() !!}

@endsection
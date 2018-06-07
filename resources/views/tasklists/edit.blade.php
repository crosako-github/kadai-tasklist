@extends('layouts.app')

@section('content')

    <h1>id: {{ $tasklist->id }} のタスク編集ページ</h1>
    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

        {!! Form::label('task', 'タスクの編集:') !!}
        {!! Form::text('task') !!}
        <br>
        <br>
        {!! Form::label('deadline', '何時までにする？？:') !!}
        {!! Form::date('deadline') !!}
        <br>
        <br>
        {!! Form::label('status', '状況は変わりましたか？？:') !!}
        {!! Form::text('status') !!}
        <br>
        <br>
        {!! Form::submit('更新') !!}

    {!! Form::close() !!}


@endsection
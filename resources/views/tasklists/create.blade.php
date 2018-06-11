@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-xs-6">
        <h1>新規タスク作成ページ</h1>
        {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
            <br>
        <div class="form-group">
            {!! Form::label('task', 'タスク:') !!}
            {!! Form::text('task', null, ['class' => 'form-control']) !!}
        </div>
            <br>
        <div class="form-group">
            {!! Form::label('deadline', '何時まで？？:') !!}
            {!! Form::date('deadline', null, ['class' => 'form-control']) !!}
        </div>
            <br>
        <div class="form-group">
            {!! Form::label('status', '状況は？？:') !!}
            {!! Form::text('status', null, ['class' => 'form-control']) !!}
        </div>
            <br>
            {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}
    
        {!! Form::close() !!}
    </div>
</div>
@endsection
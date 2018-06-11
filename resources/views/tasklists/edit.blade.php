@extends('layouts.app')

@section('content')

<div class="row">
    <div class="col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
        <h1>【ID:{{ $tasklist->id }}】タスク編集ページ</h1>

            {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}

                    <br>        

            <div class="form-group">
                {!! Form::label('task', 'タスクの編集:') !!}
                {!! Form::text('task', null, ['class' => 'form-control']) !!}
            </div>
                    <br>
            <div class="form-group">
                {!! Form::label('deadline', '何時までにする？？:') !!}
                {!! Form::date('deadline', null, ['class' => 'form-control']) !!}
            </div>
                    <br>
            <div class="form-group">
                {!! Form::label('status', '状況は変わりましたか？？:') !!}
                {!! Form::text('status', null, ['class' => 'form-control']) !!}
            </div>
                    <br>

                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
    </div>
</div>
@endsection
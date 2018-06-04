@extends('layouts.app')

@section('content')

    <h1>【id = {{ $tasklist->id }}】タスクの詳細ページ</h1>

    <p><font size="7">{{ $tasklist->task }}</font></p>
    <p><font size="5">期限 ： {{ $tasklist->deadline }} </font></p>
    
     {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id]) !!}
    <br>
    <br>
    <p>↓消す時はこっち</p>
     {!! Form::submit('削除') !!}

@endsection
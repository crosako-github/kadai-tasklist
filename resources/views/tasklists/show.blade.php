@extends('layouts.app')

@section('content')

    <h1>タスクの詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $tasklist->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $tasklist->task }}</td>
        </tr>
        <tr>
            <th>期限</th>
            <td>{{ $tasklist->deadline }}</td>
        </tr>
            <th>現在の状況</th>
            <td>{{ $tasklist->status }}</td>
    </table>

             {!! link_to_route('tasklists.edit', 'このタスクを編集', ['id' => $tasklist->id], ['class' => 'btn btn-default']) !!}
        <br>
        <br>
    <p>↓消す時はこっち</p>
     {!! Form::model($tasklist, ['route' => ['tasklists.destroy', $tasklist->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
     {!! Form::close() !!}

@endsection
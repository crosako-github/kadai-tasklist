@extends('layouts.app')

@section('content')

    <h1>Tasklists</h1>

    @if (count($tasklists) > 0)
        <table border="1"  width="100%">
            <caption>タスク一覧表</caption>
            <tr>
                <th>タスクID</th>
                <th align="left">タスク</th>
                <th>期限</th>
                <th>状況</th>
                <th>登録日</th>
                <th>更新日</th>
            </tr>
            <tr>
            @foreach ($tasklists as $tasklist)
                <th>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!}</th>
                <th align="left">{{ $tasklist->task }}</th>
                <th>{{ $tasklist->deadline }}</th>
                <th>{{ $tasklist->status }}</th>
                <th>{{ $tasklist->created_at }}</th>
                <th>{{ $tasklist->updated_at }}</th>
            </tr>
            @endforeach
        </table>
<br>
<br>

    @endif

    {!! link_to_route('tasklists.create', '新規タスクの登録はこちら') !!}

@endsection

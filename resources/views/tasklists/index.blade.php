@extends('layouts.app')

@section('content')

    <h1>Tasklists</h1>

    @if (count($tasklists) > 0)
        <table border="1"  width="70%">
            <caption>タスク一覧表</caption>
            <tr>
                <th>タスクID</th>
                <th align="left">タスク</th>
                <th>期限</th>
                <th>完了チェック</th>
            </tr>
            <tr>
            @foreach ($tasklists as $tasklist)
                <th>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!}</th>
                <th align="left">{{ $tasklist->task }}</th>
                <th>{{ $tasklist->deadline }}</th>
                <th><input type="checkbox" {{ $tasklist->compcheck }}></th>
            </tr>
            @endforeach
        </table>
<br>
<br>

    @endif

    {!! link_to_route('tasklists.create', '新規タスクの登録はこちら') !!}

@endsection

@extends('layouts.app')

@section('content')

    <h1>タスク一覧</h1>

    @if (count($tasklists) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>タスク</th>
                    <th>期限</th>
                    <th>状況</th>
                    <th>登録日</th>
                    <th>更新日</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tasklists as $tasklist)
                    <tr>
                        <td>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!}</td>
		                <td>{{ $tasklist->task }}</td>
		                <td>{{ $tasklist->deadline }}</td>
		                <td>{{ $tasklist->status }}</td>
		                <td>{{ $tasklist->created_at }}</td>
		                <td>{{ $tasklist->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
<br>
<br>

    @endif

    {!! link_to_route('tasklists.create', '新規タスクの登録はこちら', null, ['class' => 'btn btn-primary']) !!}

@endsection

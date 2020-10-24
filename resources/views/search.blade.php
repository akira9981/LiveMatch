@extends('layouts.app')

@section('content')
<p>検索結果</p>
  @foreach ($meetings as $meeting)
    <tr>
        <td>{{ $meeting->title }}</td><br>
        <td>{{ $meeting->capacity}}</td><br>
        <td>{{ $meeting->detail }}</td><br>
    </tr>
    <p>-----------</p>
  @endforeach
@endsection
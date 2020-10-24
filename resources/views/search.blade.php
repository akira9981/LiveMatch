@extends('layouts.app')

@section('content')
<p>検索結果</p><br>
<p>meeting</p>
  @foreach ($meetings as $meeting)
    <td>{{ $meeting->title }}</td><br>
    <td>{{ $meeting->detail }}</td><br>
    <a href={{url("meeting/{$meeting->id}")}}>詳細へ進む<a>
    <p>-----------</p>
  @endforeach
<p>user</p>
  @foreach ($users as $user)
    <td>{{ $user->name }}</td><br>
    <td>{{ $user->profile }}</td><br>
    <a href={{url("message/{$user->id}")}}>メッセージへ進む<a>
    <p>-----------</p>
  @endforeach
@endsection
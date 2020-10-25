@extends('layouts.app')

@section('content')
<p>検索結果</p><br>
<p>meeting</p>
@if($meetings == '[]')
<p>該当する募集がありません。</p>
@else
  @foreach ($meetings as $meeting)
    <td>{{ $meeting->title }}</td><br>
    <td>{{ $meeting->detail }}</td><br>
    <a href={{url("meeting/{$meeting->id}")}}>詳細へ進む<a>
    <p>-----------</p>
  @endforeach
@endif
<br>
<p>user</p>
@if($users == '[]')
<p>該当するユーザーがいません。</p>
@else
  @foreach ($users as $user)
    <td>{{ $user->name }}</td><br>
    <td>{{ $user->profile }}</td><br>
    <a href={{url("message/{$user->id}")}}>メッセージへ進む<a>
    <p>-----------</p>
  @endforeach
@endif
@endsection
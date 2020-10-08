@extends('layouts.app')

@section('content')
<h1>message</h1>
<a href={{url("/")}}>募集</a>

<h1>{{ $meeting_total }}件の募集中</h1><br>

@foreach($meetings as $meeting)
{{ $meeting->title }}<br>
@endforeach
<br>
<h2>{{$entry_total}}件の参加申請</h2>
<br>

@foreach($entries as $entry)
<h2>------------</h2>
{{$entry->meetings->title}}<br>
{{$entry->meetings->user->name}}<br>
{{$entry->meetings->user->image}}
@endforeach
<br>

<h2>チャット画面</h2><br>
@if(empty($message))
  <h1>メッセージがありません</h1>
@else
  @foreach($messages as $message)
  {{$message->user->name}}<br>
  {{$message->message}}<br>
  {{$message->created_at}}<br>
  @endforeach
@endif

@endsection
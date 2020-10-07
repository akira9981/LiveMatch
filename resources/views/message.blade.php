@extends('layouts.app')

@section('content')
<h1>message</h1>
<a href={{url("/")}}>募集</a>

<h2>{{ $meeting_total }}件の募集中</h2><br>

@foreach($meetings as $meeting)
{{ $meeting->title }}<br>
@endforeach

<h2>{{$entry_total}}件の参加申請</h2>
@foreach($entries as $entry)
<h2>------------</h2>
{{$entry->meetings->title}}<br>
{{$entry->meetings->user->name}}<br>
@endforeach

<h2>チャット画面</h2>
<a href={{url("/")}}>参加</a>
@endsection
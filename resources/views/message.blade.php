@extends('layouts.app')
@inject('entry_users','App\Services\MessageService')
@section('content')
<h1>message</h1>
<p>募集</p>
<h1>{{ $meeting_total }}件の募集中</h1><br>
@foreach($main_meetings as $main_meeting)
{{ $main_meeting->title }}<br>
<p>申請中のユーザー</p>
  @foreach($entry_users->getEntryUser($entries,$main_meeting->id) as $entry_user)
  <a href={{url("message/{$entry_user->user->id}")}}>{{ $entry_user->user->name }}</a><br>
  @endforeach
  -----------------<br>
@endforeach
<br>
<h2>{{$entry_total}}件の参加申請中</h2>
<br>

@foreach($main_entries as $main_entry)
<h2>------------</h2>
{{$main_entry->meetings->title}}<br>
{{$main_entry->meetings->user->name}}<br>
{{$main_entry->meetings->user->image}}
@endforeach
<br>

@include('message-form')
@endsection
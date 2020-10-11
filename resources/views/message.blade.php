@extends('layouts.app')
@inject('entry_users','App\Services\MessageService')
@section('content')
<h1>message</h1>
<a href={{url("/")}}>募集</a>
<h1>{{ $meeting_total }}件の募集中</h1><br>
@foreach($main_meetings as $main_meeting)
{{ $main_meeting->title }}<br>
  @foreach($entry_users->getEntryUser($entries,$main_meeting->id) as $entry_user)
  {{ $entry_user->user->name }}<br>
  @endforeach
@endforeach
<br>
<h2>{{$entry_total}}件の参加申請</h2>
<br>

@foreach($main_entries as $main_entry)
<h2>------------</h2>
{{$main_entry->meetings->title}}<br>
{{$main_entry->meetings->user->name}}<br>
{{$main_entry->meetings->user->image}}
@endforeach
<br>

<h2>チャット画面</h2><br>
@if(empty($messages))
  <h1>メッセージがありません</h1>
@else
  @foreach($messages as $message)
  {{$message->user->name}}<br>
  {{$message->message}}<br>
  {{$message->created_at}}<br>
  @endforeach
@endif

<div class="review-contents">
  <h1 class='pagetitle'>フォーム</h1>
  <form method='post' action="/message/{id}">
    {{ csrf_field() }}
    <div class="review-body">
      <div class="form-group">
        <label>メッセージ</label>
        <input type='text' class='form-control' name='message' placeholder='メッセージを入力'>
      </div>
      <div class="btn-wrapper">
        <input type='submit' class='btn-primary' value='送信'>
      </div>
    </div>
  </form>
</div>
@endsection
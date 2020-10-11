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
<a href={{url("message/{$main_entry->meetings->user_id}")}}>{{$main_entry->meetings->user->name}}</a><br>
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
  <form method='post' action="/message">
    {{ csrf_field() }}
    <div class="review-body">
      <div class="form-group">
        <label>メッセージ</label>
        <input type="hidden" name="recieve" value="" >
        <input type='text' class='form-control' name='message' placeholder='メッセージを入力'>
      </div>
      <div class="btn-wrapper">
        <input type='submit' class='btn-primary' value='送信'>
      </div>
    </div>
  </form>
</div>
@endsection
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
@if(empty($messages))
  <h1>メッセージがありません</h1>
@else
  @foreach($messages as $message)
  {{$message->user->name}}<br>
  {{$message->message}}<br>
  {{$message->created_at}}<br>
  @endforeach
@endif

<h1>投稿ページ</h1>
<div class="review-contents">
  <h1 class='pagetitle'>投稿フォーム</h1>
  <form method='post' action="/message/{id}">
    {{ csrf_field() }}
    <div class="review-body">
      <div class="form-group">
        <label>title</label>
        <input type='text' class='form-control' name='title' placeholder='タイトルを入力'>
      </div>
      <div class="form-group">
        <label>募集人数</label>
        <input type='number' class='form-control' name='capacity' placeholder='人数を入力' min="1" max="100">
      </div>
      <div class="form-group">
        <label>詳細</label>
        <input type='text' class='form-control' name='detail' placeholder='詳細を入力'>
      </div>
      <div class="btn-wrapper">
        <input type='submit' class='btn-primary' value='募集する'>
      </div>
    </div>
  </form>
</div>
@endsection
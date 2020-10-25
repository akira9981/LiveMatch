<x-app-layout>
@inject('entry_users','App\Services\MessageService')

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Message') }}
        </h2>
</x-slot>
<p>募集</p>
<h1>{{ $meeting_total }}件の募集中</h1><br>
@foreach($meetings as $meeting)
{{ $meeting->title }}<br>
<p>申請中のユーザー</p>
  @foreach($entry_users->getEntryUser($entries,$meeting->id) as $entry_user)
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
  {{$message->message}}<br>
  {{$message->user->name}}<br>
  {{$message->created_at}}<br>
  @endforeach
@endif

@if($request->id == null)
<p>ユーザーを選んでください。</p>
@else
<div class="review-contents">
  <h1 class='pagetitle'>フォーム</h1>
  <form method='post' action="/message">
    {{ csrf_field() }}
    <div class="review-body">
      <div class="form-group">
        <label>メッセージ</label>
        <input type="hidden" name="recieve" value="{{$request->id}}" >
        <input type='text' class='form-control' name='message' placeholder='メッセージを入力'>
      </div>
      <div class="btn-wrapper">
        <input type='submit' class='btn-primary' value='送信'>
      </div>
    </div>
  </form>
</div>
@endif
</x-app-layout>
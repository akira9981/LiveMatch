<x-app-layout>
@inject('entry_users','App\Services\MessageService')

<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Message') }}
        </h2>
</x-slot>
<div class="main-contents">
  <div class="message-wrapper">
    <div class="message-list">
      <div class="message-mymeeting">
        <p class="message-title">募集中<br>
        {{ $meeting_total }}件の募集中</p>
          @foreach($meetings as $meeting)
          {{ $meeting->title }}<br>
          <p>申請中のユーザー</p>
            @foreach($entry_users->getEntryUser($entries,$meeting->id) as $entry_user)
            <a href={{url("message/{$entry_user->user->id}")}}>{{ $entry_user->user->name }}</a><br>
            @endforeach
            -----------------<br>
          @endforeach
      </div>
      <div class="message-entry">
        <p class="message-title">参加申請中<br>
        {{$entry_total}}件の参加申請中</p>
        @foreach($main_entries as $main_entry)
        {{$main_entry->meetings->title}}<br>
        <a href={{url("message/{$main_entry->meetings->user_id}")}}>{{$main_entry->meetings->user->name}}</a><br>
        {{$main_entry->meetings->user->image}}
        @endforeach
      </div>
    </div>

    <div class="message-form">
      @if($request->id == null)
        <p>ユーザーを選んでください。</p>
      @else
        <p class="message-title">{{$select_user->user->name}}</p>
        @if(empty($messages))
          <p>メッセージがありません</p>
        @else
          @foreach($messages as $message)
            @if($message->send == Auth::id())
            <div class="right-message">
              <div class="message">
              {{$message->message}}<br>
              {{$message->user->name}}<br>
              {{$message->created_at}}<br>
              </div>
            </div>
            @else
            <div class="left-message">
              <div class="message">
              {{$message->message}}<br>
              {{$message->user->name}}<br>
              {{$message->created_at}}<br>
              </div>
            </div>
            @endif
          @endforeach
        @endif
        <div class="form">
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
    </div>
  </div>
</div>
</x-app-layout>
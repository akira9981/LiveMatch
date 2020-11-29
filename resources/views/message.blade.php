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
          <div class="meeting-wrapper">
            {{ $meeting->title }}<br>
            <p>申請中のユーザー</p>
            @foreach($entry_users->getEntryUser($entries,$meeting->id) as $entry_user)
            <div class="user-wrapper">
              @if(!empty($entry_user->user->profile_photo_path))
              <img class="user-icon" src="{{ $entry_user->user->profile_photo_path }}" />
              @else
              <img class="user-icon" src="{{ asset('images/noimage.jpg') }}" />
              @endif
              <a class="user-name" href={{url("message/{$entry_user->user->id}")}}>{{ $entry_user->user->name }}</a><br>
            </div>
            @endforeach
          </div>
          @endforeach
      </div>
      <div class="message-mymeeting">
        <p class="message-title">参加申請中<br>
        {{$entry_total}}件の参加申請中</p>
        @foreach($main_entries as $main_entry)
        <div class="meeting-wrapper">
          {{$main_entry->meetings->title}}<br>
          <div class="user-wrapper">
            @if(!empty($main_entry->meetings->user->profile_photo_path))
            <img class="user-icon" src="{{ $main_entry->meetings->user->profile_photo_path }} " />
            @else
            <img class="user-icon" src="{{ asset('images/noimage.jpg') }}" />
            @endif
            <a class="user-name" href={{url("message/{$main_entry->meetings->user_id}")}}>{{$main_entry->meetings->user->name}}</a><br>
          </div>
        </div>
        @endforeach
      </div>
    </div>

    <div class="message-form">
      @if($request->id == null)
        <p class="no-select">ユーザーを選択してください。</p>
      @else
        <div class="list-wrapper">
          @if($messages->isEmpty())
            <p class="no-select">メッセージがありません。</p>
          @else
            @foreach($messages as $message)
              @if($message->send == Auth::id())
              <div class="right-message">
                <div class="message">
                {{$message->message}}<br>
                {{$message->user->name}}<br>
                </div>
                <p>{{$message->created_at}}</p>
              </div>
              @else
              <div class="left-message">
                <div class="message">
                {{$message->message}}<br>
                {{$message->user->name}}<br>
                </div>
                <p>{{$message->created_at}}</p>
              </div>
              @endif
            @endforeach
          @endif
        </div>
        <div class="form-wrapper">
          <form method='post' action="/message" class="form-group">
            {{ csrf_field() }}
            <div class="message-user-image">{{$select_user->profile_photo_path}}</div>
            <div class="message-user-name">{{$select_user->name}}</div>
            <input type="hidden" name="recieve" value="{{$request->id}}">
            <input type='text' class='form-control' name='message' placeholder='メッセージを入力'>
            <input type='submit' class='btn-primary' value='送信'>
          </form>
        </div>
      @endif
    </div>
  </div>
</div>
</x-app-layout>

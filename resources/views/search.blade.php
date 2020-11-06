<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search') }}
        </h2>
</x-slot>
<div class="main-contents">
  <div class="search-wrapper">
    <div class="search-body">
      <p class="title">meeting</p>
      @if($meetings == '[]')
      <p>該当する募集がありません。</p>
      @else
        @foreach ($meetings as $meeting)
        <div class="searches">
          <p>{{ $meeting->title }}</p><br>
          <p>{{ $meeting->detail }}</p><br>
          <a href={{url("meeting/{$meeting->id}")}}>詳細へ進む<a>
        </div>
        @endforeach
      @endif
    </div>
    <div class="search-body">
      <p class="title">user</p>
      @if($users == '[]')
      <p>該当するユーザーがいません。</p>
      @else
        @foreach ($users as $user)
        <div class="searches">
          <p>{{ $user->name }}</p><br>
          <p>{{ $user->profile }}</p><br>
          <a href={{url("message/{$user->id}")}}>メッセージへ進む<a>
        </div>
        @endforeach
      @endif
    </div>
  </div>
</x-app-layout>
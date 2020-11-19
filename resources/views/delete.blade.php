<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete') }}
        </h2>
</x-slot>
<div class="main-contents">
<div class="card-body">
      @if(!empty($meeting->user->profile_photo_path))
      <div class='image-wrapper'><img class='image' src={{ $meeting->user->profile_photo_path }}></div>
      @else
      <div class='image-wrapper'><img class='image' src="{{ asset('images/noimage.jpg') }}"></div>
      @endif
      <div class='meeting-wrapper'>
        <div class='meeting-title'>{{ $meeting->title }}</div>
        <p class='meeting-detail'>
            募集人数 {{ $meeting->capacity }}人<br>
            {{ $meeting->detail }}<br>
            {{ $meeting->user->name }}さん<br>
        </p>
      </div>
</div>
<div class="delete-body">
    <p>削除しますか</p>
    <form method="post" action="/meeting/{{$meeting->id}}/remove">
        {{ csrf_field() }}
        <input type="submit" value="yes">
    </form>
    <a href={{url('my_meeting')}}>no</a>
</div>
</x-app-layout>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit') }}
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
            募集人数{{ $meeting->capacity }}人<br>
            {{ $meeting->detail }}<br>
            {{ $meeting->user->name }}さん<br>
        </p>
      </div>
    </div>
    <form class="edit-wrapper" method='post' action="/meeting/{{$meeting->id}}/update">
      {{ csrf_field() }}
      <div class="edit-body">
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
          <input type='submit' class='btn-primary' value='編集する'>
        </div>
      </div>
    </form>
</div>
</x-app-layout>
<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Meeting') }}
        </h2>
</x-slot>
<a href={{url("/create")}}>募集する</a>
<div class="main-contents">
@if($meetings == '[]')
<p>現在募集をかけていません。</p>
@else
  @foreach($meetings as $meeting)
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
        </p>
        <div class="detail-btn"><a href={{url("meeting/{$meeting->id}/edit")}}>編集する</a></div>
        <div class="detail-btn"><a href={{url("meeting/{$meeting->id}/delete")}}>削除する</a></div>
        <div class="detail-btn"><a href={{url("meeting/{$meeting->id}")}}>詳細へ進む</a></div>
      </div>
    </div>
  @endforeach
@endif
</div>
</x-app-layout>
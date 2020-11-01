<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home') }}
        </h2>
</x-slot>
<div class="main-contents">
  @foreach($meetings as $meeting)
    <div class="card-body">
      @if(!empty($meeting->user->image))
      <div class='image-wrapper'><img class='image' src={{ $meeting->image }}></div>
      @else
      <div class='image-wrapper'><img class='image' src="{{ asset('images/noimage.jpg') }}"></div>
      @endif
      <div class='meeting-wrapper'>
        <div class='meeting-title'>{{ $meeting->title }}</div>
        <p class='meeting-detail'>
            募集人数　{{ $meeting->capacity }}人<br>
            {{ $meeting->detail }}<br>
            {{ $meeting->user->name }}　さん<br>
        </p>
        <div class="detail-btn"><a href={{url("meeting/{$meeting->id}")}}>詳細へ進む<a></div>
      </div>
    </div>
  @endforeach
  {{ $meetings->links() }}
</div>
</x-app-layout>
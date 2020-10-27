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
      <div class='image-wrapper'><img class='review-image' src={{ $meeting->image }}></div>
      @else
      <div class='image-wrapper'><img class='review-image' src="{{ asset('images/noimage.jpg') }}"></div>
      @endif
      <h3 class='review-title'>{{ $meeting->title }}</h3>
      <p class='description'>
          {{ $meeting->capacity }}<br>
          {{ $meeting->detail }}<br>
          {{ $meeting->user->name }}<br>
      </p>
      <div class="detail-btn">
      <a href={{url("meeting/{$meeting->id}")}}>詳細へ進む<a>
      </div>
    </div>
  @endforeach
</div>
</x-app-layout>
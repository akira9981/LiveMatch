<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Delete') }}
        </h2>
</x-slot>
<div class="main-contents">
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
    </div>
<p>削除しますか</p>
<form method="post" action="/meeting/{{$meeting->id}}/remove">
    {{ csrf_field() }}
    <input type="submit" value="yes">
</form>
<a href={{url('my_meeting')}}>no</a>
</x-app-layout>
@extends('layouts.app')

@section('content')
<h1>meeting</h1>
<div class="card-body">
    @if(!empty($meeting->user->image))
    <div class='image-wrapper'><img class='review-image' src={{ $meeting->image }}></div>
    @else
    <div class='image-wrapper'><img class='review-image' src="{{ asset('images/noimage.jpg') }}"></div>
    @endif
    <h3 class='review-title'>{{ $meeting->title }}</h3>
    <p class='description'>
        {{ $meeting->capacity }}
        {{ $meeting->detail }}
    </p>
    <div class="detail-btn">
    <a href={{url("home")}}>ホームへ戻る<a>
    </div>
</div>

{{ $meeting->user->name }}
{{ $meeting->user->age }}
{{ $meeting->user->gender }}
{{ $meeting->user->profile }}
@endsection
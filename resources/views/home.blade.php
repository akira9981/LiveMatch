@extends('layouts.app')

@section('content')
<h1>home</h1>
<div class="main-contents">
  @foreach($meetings as $meeting)
    <div class="card-body">
        @if(!empty($meeting->image))
        <div class='image-wrapper'><img class='review-image' src={{ $meeting->image }}></div>
        @else
        <div class='image-wrapper'><img class='review-image' src="{{ asset('images/noimage.jpg') }}"></div>
        @endif
        <h3 class='review-title'>{{ $meeting->title }}</h3>
        <p class='description'>
            {{ $meeting->capacity }}
            {{ $meeting->detail }}
            {{ $meeting->user_id}}
        </p>
        <div class="detail-btn">
            <a href=>詳細を読む</a>
        </div>
    </div>
  @endforeach
@endsection
@extends('layouts.app')

@section('content')
<h1>home</h1>
<a href={{url("/create")}}>募集する</a>
<a href={{url("/message")}}>メールボックス</a>
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
            {{ $meeting->capacity }}
            {{ $meeting->detail }}
            {{ $meeting->user->name }}
        </p>
        <div class="detail-btn">
        <a href={{url("meeting/{$meeting->id}")}}>詳細へ進む<a>
        </div>
    </div>
  @endforeach
@endsection
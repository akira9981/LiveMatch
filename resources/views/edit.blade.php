@extends('layouts.app')

@section('content')
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
    <form method='post' action="/meeting/{{$meeting->id}}/update">
    {{ csrf_field() }}
    <div class="review-body">
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
        <input type='submit' class='btn-primary' value='募集する'>
      </div>
    </div>
  </form>
</div>
@endsection
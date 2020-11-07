<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meeting') }}
        </h2>
</x-slot>
<div class="main-contents">
<div class="card-body">
    @if(!empty($meeting->user->image))
    <div class='image-wrapper'><img class='review-image' src={{ $meeting->image }}></div>
    @else
    <div class='image-wrapper'><img class='review-image' src="{{ asset('images/noimage.jpg') }}"></div>
    @endif
    <h3 class='review-title'></h3>
    <p class='description'>
        {{ $meeting->user->name }}
        {{ $meeting->user->age }}
        {{ $meeting->user->gender }}
        {{ $meeting->user->profile }}
    </p>

    <div class="detail-btn">
    @if($meeting->user->id == Auth::id())
        <p></p>
    @else
        @if(empty($switching->user_id))
        <a href={{url("meeting/{$meeting->id}/entry")}}>応募する<a>
        @else
        <a href={{url("meeting/{$meeting->id}/cancel")}}>取り消す<a>
        @endif
    @endif
    <a href={{url("home")}}>ホームへ戻る<a>
    </div>
</div>
{{$meeting->title}}
{{ $meeting->capacity }}
{{ $meeting->detail }}
<p class>{{ $total }}　人から応募があります。</p>

@foreach($entries as $entry)
    <div class="card-body">
        @if(!empty($entry->user->image))
        <div class='image-wrapper'><img class='review-image' src={{ $entry->user->image }}></div>
        @else
        <div class='image-wrapper'><img class='review-image' src="{{ asset('images/noimage.jpg') }}"></div>
        @endif
        <h3 class='review-title'>{{ $entry->user->name }}</h3>
    </div>
@endforeach
</div>
</x-app-layout>
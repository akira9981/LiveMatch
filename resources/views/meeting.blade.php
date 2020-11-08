<x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Meeting') }}
        </h2>
</x-slot>
<div class="main-contents">
<div class="detail-wrapper">
    <div class="card-body">
        @if(!empty($meeting->user->image))
        <div class='image-wrapper'><img class='image' src={{ $meeting->image }}></div>
        @else
        <div class='image-wrapper'><img class='image' src="{{ asset('images/noimage.jpg') }}"></div>
        @endif
        <div class='description'>
            <p>{{ $meeting->user->name }}</p>
            <p>{{ $meeting->user->age }}歳</p>
            <p>{{ $meeting->user->gender }}</p>
            <p>{{ $meeting->user->profile }}</p>
        </div>

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
        <a href={{url("home")}}>ホームへ戻る</a>
        </div>
    </div>
    <div class="meeting-detail">
        <p>{{$meeting->title}}</p>
        <p>{{ $meeting->capacity }}</p>
        <p>{{ $meeting->detail }}</p>
    </div>
</div>
<div class="entry-user-wrapper">
    <p class="title">{{ $total }}　人から応募があります。</p>
    @foreach($entries as $entry)
        <div class="entry-body">
            @if(!empty($entry->user->image))
            <div class='image-wrapper'><img class='image' src={{ $entry->user->image }}></div>
            @else
            <div class='image-wrapper'><img class='image' src="{{ asset('images/noimage.jpg') }}"></div>
            @endif
            <p class='entry-user'>{{ $entry->user->name }}</p>
        </div>
    @endforeach
</div>
</x-app-layout>
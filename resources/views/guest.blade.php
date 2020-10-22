<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>
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
    </x-jet-authentication-card>
</x-guest-layout>

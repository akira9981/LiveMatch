<x-guest-layout>
  <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
<div class="header-wrapper">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <div class="flex justify-between h-16">
          <div class="flex">
            <!-- Logo -->
            <div class="flex-shrink-0 flex items-center">
              <a href="/home">
                <x-jet-application-mark class="block h-9 w-auto" />
              </a>
            </div>

            <!-- Navigation Links -->
            <div class="hidden space-x-2 sm:-my-px sm:ml-10 sm:flex">
                <x-jet-nav-link href="/login">
                    {{ __('Login') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="/register">
                    {{ __('Register') }}
                </x-jet-nav-link>
                <x-jet-nav-link href="/register">
                    {{ __('test') }}
                </x-jet-nav-link>
            </div>
          </div>
      </div>
  </div>
  <header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
    {{ $header }}
    </div>
  </header>
</div>
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
            <a class="detail-btn" href={{url("meeting/{$meeting->id}")}}>詳細へ進む</a>
          </div>
        </div>
      @endforeach
    </div>
</x-guest-layout>

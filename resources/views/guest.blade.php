<x-guest-layout>
  <nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
  <!-- Primary Navigation Menu -->
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
                  <x-jet-nav-link href="/home" :active="request()->routeIs('dashboard')">
                      {{ __('Home') }}
                  </x-jet-nav-link>
                  <x-jet-nav-link href="/user/profile" :active="request()->routeIs('dashboard')">
                      {{ __('MyPage') }}
                  </x-jet-nav-link>
                  <x-jet-nav-link href="/create" :active="request()->routeIs('dashboard')">
                      {{ __('Create') }}
                  </x-jet-nav-link>
                  <x-jet-nav-link href="/message" :active="request()->routeIs('dashboard')">
                      {{ __('Message') }}
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
  <x-jet-authentication-card>
      <x-slot name="logo">
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

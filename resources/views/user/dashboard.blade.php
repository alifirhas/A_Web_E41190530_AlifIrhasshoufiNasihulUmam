@extends('layouts.app')

@section('head')
<meta name="theme-color" content="#000000" />
<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
<link rel="stylesheet" href="{{ mix('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/compiled-tailwind.min.css') }}" />
@endsection

@section('title')
Dashbaord | S POST
@endsection

@section('navigation')
@include('layouts.navigationMinimal')
@endsection

@section('main')

<section class="pt-16 pb-20 relative block bg-gray-900" style="min-height: 120vh;">
  <div class="container mx-auto px-4 lg:pt-24 lg:pb-64">
    <div class="flex flex-wrap justify-center">
      <div class="w-full lg:w-8/12 px-4">
        <h2 class="text-4xl font-semibold text-white text-center">Post something</h2>
        <div class="w-full bg-gray-300 p-6 mt-5 rounded-lg">
          @auth

          {{-- bagian form --}}
          <form action="{{ route('dashboard') }}" method="post">
            @csrf

            <div class="mb-4">
              <label for="body" class="sr-only">Body</label>
              <textarea name="body" id="body" cols="" rows="4"
                class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('body') border-red-500 @enderror"
                placeholder="Post something!" autofocus></textarea>

              @error('body')
              <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
              </div>
              @enderror
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-full">Post</button>

          </form>
          @endauth

          @guest
          <h3 class="text-center">Let's <a href="{{ route('login') }}" class="underline text-blue-400">Login</a> first
            to post something</h3>
          @endguest
          <hr class="mt-6 border-b-1 border-gray-400" />
          {{-- tempat post --}}
          <div class="my-4">
            @if ($posts->count())

            @foreach ($posts as $post)
            <div class="post mb-2">

              <a href="{{ route('profile', $post->user) }}" class="text-lg">{{ $post->user->username }} </a><span
                class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
              <p>{{ $post->body }}</p>
            </div>

            @endforeach

            @else
            tidak ada post
            @endif




          </div>

          <button type="button" class="bg-blue-500 text-white px-4 py-2 rounded font-medium w-full mt-4">Load
            More</button>

        </div>
      </div>
    </div>
    <div class="flex flex-wrap mt-12 justify-center">

    </div>
  </div>
</section>

@endsection

@section('footer')
@include('layouts.footerBig')
@endsection

@section('script')
<script>
  function toggleNavbar(collapseID) {
      document.getElementById(collapseID).classList.toggle("hidden");
      document.getElementById(collapseID).classList.toggle("block");
    }
</script>
@endsection
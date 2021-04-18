@extends('layouts.app')

@section('head')
<meta name="theme-color" content="#000000" />
<link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}" />
<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/apple-icon.png') }}" />
<link rel="stylesheet" href="{{ mix('css/style.css') }}" />
<link rel="stylesheet" href="{{ asset('css/compiled-tailwind.min.css') }}" />
@endsection

@section('title')
Profile | Tailwind Starter Kit by Creative Tim
@endsection

@section('navigation')
@include('layouts.navigationMinimal')
@endsection

@section('main')
<section class="relative block" style="height: 500px;">
  <div class="absolute top-0 w-full h-full bg-center bg-cover"
    style='background-image: url("{{ asset('img/photo-1.jpeg') }}");'>
    <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span>
  </div>
  <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
    style="height: 70px;">
    <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
      version="1.1" viewBox="0 0 2560 100" x="0" y="0">
      <polygon class="text-gray-300 fill-current" points="2560 0 2560 100 0 100"></polygon>
    </svg>
  </div>
</section>
<section class="relative py-16 bg-gray-300">
  <div class="container mx-auto px-4">
    <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-xl rounded-lg -mt-64">
      <div class="px-6">
        <div class="flex flex-wrap justify-center">
          <div class="w-full lg:w-3/12 px-4 lg:order-2 flex justify-center">
            <div class="relative">
              <img alt="..." src="{{ asset('img/team-2-800x800.jpg') }}"
                class="shadow-xl rounded-full h-auto align-middle border-none absolute -m-16 -ml-20 lg:-ml-16"
                style="max-width: 150px;" />
            </div>
          </div>
          <div class="w-full lg:w-4/12 px-4 lg:order-3 lg:text-right lg:self-center">
            <div class="py-6 px-3 mt-32 sm:mt-0">

              @if ($user->id == auth()->user()->id)
                  
              <form action="{{ route('profile.edit', auth()->user()->id) }}" method="get" class="inline-block">
                @csrf
                <button class="
                    inline-block bg-blue-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md 
                    shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1" type="submit"
                  style="transition: all 0.15s ease 0s;">
                  Change Data
                </button>
              </form>

              <form action="{{ route('profile.destroy', auth()->user()->id) }}" method="post" class="inline-block">
                @csrf
                @method('DELETE')
                <button class="
                  inline-block bg-red-500 active:bg-pink-600 uppercase text-white font-bold hover:shadow-md 
                  shadow text-xs px-4 py-2 rounded outline-none focus:outline-none sm:mr-2 mb-1" type="submit"
                  style="transition: all 0.15s ease 0s;">
                  Delete Account
                </button>
              </form>
              @endif


            </div>
          </div>
          <div class="w-full lg:w-4/12 px-4 lg:order-1">
            <div class="flex justify-center py-4 lg:pt-4 pt-8">
              <div class="mr-4 p-3 text-center">
                <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">22</span><span
                  class="text-sm text-gray-500">Likes</span>
              </div>
              <div class="mr-4 p-3 text-center">
                <span class="text-xl font-bold block uppercase tracking-wide text-gray-700">{{ $posts->total() }}</span><span
                  class="text-sm text-gray-500">Post</span>
              </div>

            </div>
          </div>
        </div>
        <div class="text-center mt-12">
          <h3 class="text-4xl font-semibold leading-normal mb-2 text-gray-800 mb-2">
            {{ $user->name }}

          </h3>
          <div class="text-sm leading-normal mt-0 mb-2 text-gray-500 font-bold">
            {{-- <i class="fas fa-map-marker-alt mr-2 text-lg text-gray-500"></i> --}}
            {{ $user->email }}
          </div>

        </div>
        <div class="mt-10 py-10 border-t border-gray-300">
          <div class="flex flex-wrap justify-center">
            <div class="w-full lg:w-9/12 px-4">
              <div class="my-4">

                @if ($posts->count())
                @foreach ($posts as $post)

                <div class="post mb-2">

                  <a href="#" class="text-lg">{{ $post->user->username}} </a><span
                    class="text-sm">{{ $post->created_at->diffForHumans() }}</span>
                  <p contenteditable="true">{{ $post->body }}</p>
                </div>

                @endforeach

                <div class="my-5">
                  {{ $posts->links() }}

                </div>

                @else
                tidak ada post
                @endif

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
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
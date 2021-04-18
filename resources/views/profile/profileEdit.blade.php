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

                        </div>
                    </div>
                    <div class="w-full lg:w-4/12 px-4 lg:order-1">
                    </div>
                </div>

                <div class="w-6/12 mt-12 mb-12 mx-auto">
                    <form method="POST" action="{{ route('profile.put') }}">
                        @method('PUT')
                        @csrf
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">Name</label>
                            <input type="text" name="name"
                                class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                placeholder="Name" style="transition: all 0.15s ease 0s;"
                                value="{{ auth()->user()->name }}" />
                            @error('name')
                            <div class="text-red-600 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">Old
                                Password</label>
                            <input type="password" name="oldPassword"
                                class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                placeholder="Password" style="transition: all 0.15s ease 0s;" />
                            <div class="text-gray-500 mt-2 text-sm text-right">
                                * Fill this if you want to change your password
                            </div>
                            @error('oldPassword')
                            <div class="text-red-600 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2" for="grid-password">New
                                Password</label>
                            <input type="password" name="password"
                                class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                placeholder="Password" style="transition: all 0.15s ease 0s;" />
                            <div class="text-gray-500 mt-2 text-sm text-right">
                                * Fill this if you want to change your password
                            </div>
                        </div>
                        <div class="relative w-full mb-3">
                            <label class="block uppercase text-gray-700 text-xs font-bold mb-2"
                                for="grid-password">Confirm New Password</label>
                            <input type="password" name="password_confirmation"
                                class="border-0 px-3 py-3 placeholder-gray-400 text-gray-700 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full"
                                placeholder="Password" style="transition: all 0.15s ease 0s;" />
                            <div class="text-gray-500 mt-2 text-sm text-right">
                                * Fill this if you want to change your password
                            </div>
                            @error('password')
                            <div class="text-red-600 mt-2 text-sm">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                        <input type="hidden" name="id" value="{{ auth()->user()->id }}">

                        <div class="text-center mt-6">
                            <button
                                class="bg-gray-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-3/6"
                                type="submit" style="transition: all 0.15s ease 0s;">
                                Update My Data
                            </button>
                    </form>

                    <a href="{{ route('profile', auth()->user()) }}">
                        <button
                            class="bg-red-900 text-white active:bg-gray-700 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-3/6"
                            type="button" style="transition: all 0.15s ease 0s;">
                            Cancel
                        </button>
                    </a>

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
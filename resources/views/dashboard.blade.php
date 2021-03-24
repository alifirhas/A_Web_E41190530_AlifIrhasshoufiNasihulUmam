@extends('layouts.app')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <div class="container mx-auto text-white mb-auto bg-gray-700 p-6 rounded">
        <p class="text-lg">This is Dashboard</p>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis officia dolore perferendis atque facilis, voluptatum, autem reprehenderit nobis aspernatur ratione, odio esse neque facere libero. Ducimus voluptatum pariatur dolorum in.</p>
    </div>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
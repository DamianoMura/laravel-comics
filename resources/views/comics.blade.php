@extends('layouts.default')
<?php $comics = config('comics'); 
?>
@section('content')
   <main class=" bg-gray-900 text-white py-10">
    <div class="container mx-auto px-30 text-center py-5 relative flex">
        <h2 class="comics-label">
            current series
        </h2>
    
    <div class="art-3 row-start-3 grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6">
        @foreach ($comics as $comic)
        <div class="comic-card my-3">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">

            <h3 class="mt-2 text-sm font-bold uppercase ">{{ $comic['series'] }}</h3>
        </div>
        @endforeach
    </div>
</div>
<div class="text-center mt-2">
    <button class="btn uppercase bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4  mt-6">
        load more
    </button>
</div>
        </main>
@endsection

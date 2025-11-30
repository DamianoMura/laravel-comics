@extends('layouts.default')
@section('content')
    




    <main class="container my-5 text-center">
        <div class="container flex justify-between items-center mx-auto border-b-2 py-4 border-gray-200 ms-10">
            <img src="https://lwfiles.mycourse.app/6368e5089f20781a7e4f1805-public/2c162927114072f9ebbf04043a593fb9.png"
                alt="Laravel Framework"     class="mb-4 h-15" >
            <h3 class="text-3xl p-1">Specializzazione Web Development </h3>
        
        </div>

        
        <div class="flex align-center justify-center my-5">
            <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">

            <div class="container flex-column justify-center items-center mx-auto border-b-2 py-4 border-gray-200">
                
                   
                    <h2 class="text-5xl">EX - Laravel comics</h2>
                   
                    <h3 class="text-3xl">Nome repo: laravel-comics</h3>
                    
               
            </div>

            <a href="/comics" class="flex rounded-full bg-blue-950 text-white justify-center py-10"> visualizza esercizio </a>
        </div>
        
        
        
        <p class="my-5 text-lg font-bold">
            Proviamo a replicare il layout di un sito basandoci sullo 
            <a href="{{Vite::asset('./resources/img/screenshot.png')}}" class="underline">screenshot</a> in allegato!
        </p>

        
        
    </main>
    
@endsection 
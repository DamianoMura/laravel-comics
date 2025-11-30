<?php
$links=config('links');
?>
<header>

    <nav class="container flex justify-between items-center mx-auto border-b-2 py-8 border-gray-200">
        <div>
            <a href="/">
            <img src="{{Vite::asset('./resources/img/dc-logo.png')}}" alt="DC Logo" class="h-20 ml-4"></a>
            
        </div>
        <div class="hidden lg:flex">
            <ul class="flex">
               <li class="flex gap-6 mr-4">
                @foreach ($links as $link)
                <a href="{{ $link['url'] }}" class=" uppercase font-bold hover:underline">
                    {{ $link['label'] }}
                </a>
                @endforeach
               </li>
            </ul>
        </div>
        <hr>
        
    </nav>
    <div class="jumbotron bg-cover bg-no-repeat h-48" style="background-image: url({{Vite::asset('./resources/img/jumbotron.jpg')}})">
    
    
    </div>
</header>







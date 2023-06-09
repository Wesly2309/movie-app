@extends('layouts.main')

@section('content')
<div class="container mx-auto px-4 pt-16">
    <div class="popular-movies">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Popular Movies</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <img src="/img/demonslayer.jpg" alt="Demon Slayer" class="hover:opacity-75 transition ease-in-out duration-150">
            </div>
        </div>
            <div class="mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray:300">Demon Slayer: Kimetsu No Yaiba - 
                To the Swordsmith Village</a>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="
                    Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                    01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                    0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                    01-.4 1 1 1 0 01-.62.18z" data-name="star"/><g></svg>
                    <span class="ml-1">6.7</span>
                    <span class="mx-2">|</span>
                    <span>3 February 2023</span>
                </div>
                <div class="text-gray-400 text-sm">
                    Action, Adventure, Fantasy, Thriller
                </div>
            </div>
        </div>
        <div class="grid grid-cols-4 gap-3">
            <div class="mt-8">
                <img src="/img/spiderman.jpg" alt="Spider Man" class="hover:opacity-75 transition ease-in-out duration-150">
            </div>
        </div>
            <div class="mt-2">
                <a href="#" class="text-lg mt-2 hover:text-gray:300">Spider-Man: No Way Home</a>
                <div class="flex items-center text-gray-400 text-sm mt-1">
                    <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="
                    Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                    01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                    0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                    01-.4 1 1 1 0 01-.62.18z" data-name="star"/><g></svg>
                    <span class="ml-1">8.2</span>
                    <span class="mx-2">|</span>
                    <span>15 December 2021</span>
                </div>
                <div class="text-gray-400 text-sm">
                    Action, Adventure, Fantasy, Sci-Fi
                </div>
            </div>
        </div> 
    </div>
</div> <!-- end popular movies -->

    <div class="now-playing-movies py-24">
        <h2 class="uppercase tracking-wider text-orange-500 text-lg font-semibold">Now Playing</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
            <div class="mt-8">
                <img src="/img/demonslayer.jpg" alt="Demon Slayer" class="hover:opacity-75 transition ease-in-out duration-150">
            </div>
        </div>
        <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray:300">Demon Slayer: Kimetsu No Yaiba - 
            To the Swordsmith Village</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="
                Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                01-.4 1 1 1 0 01-.62.18z" data-name="star"/><g></svg>
                <span class="ml-1">6.7</span>
                <span class="mx-2">|</span>
                <span>3 February 2023</span>
            </div>
            <div class="text-gray-400 text-sm">
                Action, Adventure, Fantasy, Thriller
            </div>
        </div>
    </div>
    <div class="grid grid-cols-4 gap-3">
        <div class="mt-8">
            <img src="/img/spiderman.jpg" alt="Spider Man" class="hover:opacity-75 transition ease-in-out duration-150">
        </div>
    </div>
        <div class="mt-2">
            <a href="#" class="text-lg mt-2 hover:text-gray:300">Spider-Man: No Way Home</a>
            <div class="flex items-center text-gray-400 text-sm mt-1">
                <svg class="fill-current text-orange-500 w-4" viewBox="0 0 24 24"><g data-name="
                Layer 2"><path d="M17.56 21a1 1 0 01-.46-.11L12 18.22l-5.1 2.671a1 1 0
                01-1.45-1.06l1-5.63-4.12-4a1 1 0 01-.25-1 1 1 0 01.81-.68l5.7-.83 2.51-5.13a1 1
                0 011.8 0l2.54 5.12 5.7.83a1 1 0 0f1.81.68 1 1 0 01-.25 1l-4.12 4 1 5.63a1 1 0
                01-.4 1 1 1 0 01-.62.18z" data-name="star"/><g></svg>
                <span class="ml-1">8.2</span>
                <span class="mx-2">|</span>
                <span>15 December 2021</span>
            </div>
            <div class="text-gray-400 text-sm">
                Action, Adventure, Fantasy, Sci-Fi
            </div>
        </div>
    </div> 
</div>
</div> 
@endsection

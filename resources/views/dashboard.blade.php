<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

{{--    <h1>$start_timer = {{\Illuminate\Support\Facades\Auth::user()->created_at}}</h1>--}}

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Главная страница
{{--                    <a href="{{route('articles.create')}}">Create</a>--}}
{{--                    <a href="{{route('articles.edit', ['article' => 1])}}">Edit</a>--}}
                </div>
                <h1 class="countdown-title">Countdown Clock</h1>
                <div id="deadline-message" class="deadline-message">
                    Time is up!
                </div>
                <div id="countdown" class="countdown">
                    <div class="countdown-number">
                        <span class="days countdown-time"></span>
                        <span class="countdown-text">Days</span>
                    </div>
                    <div class="countdown-number">
                        <span class="hours countdown-time"></span>
                        <span class="countdown-text">Hours</span>
                    </div>
                    <div class="countdown-number">
                        <span class="minutes countdown-time"></span>
                        <span class="countdown-text">Minutes</span>
                    </div>
                    <div class="countdown-number">
                        <span class="seconds countdown-time"></span>
                        <span class="countdown-text">Seconds</span>
                    </div>
                </div>

                <link rel="stylesheet" href="/assets/timer.css">
                <script src="/assets/timer.js"></script>
                <script>
                    var deadline = new Date(Date.parse(new Date('{{\Illuminate\Support\Facades\Auth::user()->created_at}}')) + 24 * 4050 * 1000); // for endless timer
                    initializeClock("countdown", deadline);
                </script>
                <!--
                https://denis-creative.com/jstimer/
                https://www.sitepoint.com/build-javascript-countdown-timer-no-dependencies/
                -->
            </div>
        </div>
    </div>
</x-app-layout>


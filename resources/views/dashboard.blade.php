<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight company-name">
            {{ __('Доска объявлений') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 company-name">
                </div>
                <h1 class="countdown-title">Получите скидку 90% на комплексное продвижение</h1>
                <h6 class="discount-title">До конца акции осталось</h6>
                <div id="deadline-message" class="deadline-message">
                   Срок действия скидки истек
                </div>
                <div class="timer_block">
                <div id="countdown" class="countdown">
                    <div class="countdown-number">
                        <span class="hours countdown-time"></span>
                        <span class="countdown-text">:</span>
                    </div>
                    <div class="countdown-number">
                        <span class="minutes countdown-time"></span>
                        <span class="countdown-text">:</span>
                    </div>
                    <div class="countdown-number">
                        <span class="seconds countdown-time"></span>
                        <span class="countdown-text"></span>
                    </div>
                </div>
                </div>
                <h6 class="discount-main">Как разместить объявление?</h6>
                <div class="discount-stages">
                    <div class="discount-st-first">
                        1. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, rerum!
                    </div>
                    <div class="discount-st-second">
                        2. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, rerum!
                    </div>
                    <div class="discount-st-third">
                        3. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos, rerum!
                    </div>
                </div>
                <h6 class="advantages-main">Преимущества работы с нами</h6>
                <ul class="advantages-list">
                    <li class="advantages-item">1. Самая быстрая скорость продажи автомобиля (средний срок продажи составляет 20 дней, что на 50% быстрее, чем на других площадках)</li>
                    <li class="advantages-item">2. Удобный сервис, легко разместить объявление</li>
                    <li class="advantages-item">3. Большой выбор инструментов для ускорения продажи</li>
                    <li class="advantages-item">4. Много объявлений</li>
                    <li class="advantages-item">5. Быстрая регистрация</li>
                </ul>
            </div>
        </div>
    </div>

                <script>
                    var deadline = new Date(Date.parse(new Date('{{\Illuminate\Support\Facades\Auth::user()->created_at}}')) + 24 * 4050 * 1000); // for endless timer
                    initializeClock("countdown", deadline);
                </script>

            </div>
        </div>
    </div>
</x-app-layout>


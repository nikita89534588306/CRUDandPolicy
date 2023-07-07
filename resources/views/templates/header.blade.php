<nav class="py-2 bg-body-tertiary border-bottom">
    <div class="container d-flex flex-wrap">
        <ul class="nav me-auto">
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2 active" aria-current="page">Home</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Features</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">Pricing</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">FAQs</a></li>
        <li class="nav-item"><a href="#" class="nav-link link-body-emphasis px-2">About</a></li>
        </ul>
        
            @if (Route::has('login'))
                <ul class="nav">
                    
                    @auth 
                        <x-user-components.nav-item href="{{ url('/dashboard') }}" >Личный кабинет</x-user-components.nav-item>
                    @else
                        
                        <x-user-components.nav-item href="{{ url('/login') }}" >Войти</x-user-components.nav-item>

                        @if(Route::has('register'))  
                            <x-user-components.nav-item href="{{ url('/register') }}">Зарегистрироваться</x-user-components.nav-item>
                        @endif

                    @endauth

                </ul>
            @endif
    </div>
</nav>
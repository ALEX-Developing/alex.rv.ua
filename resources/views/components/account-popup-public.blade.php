@auth
<p class="header__user-name">Вітаю, {{ Auth::user()->name }}</p>
@if (Auth::user()->usertype == 'user')
    <div class="header__user-type-email">
        <p class="header__user-type"></p>
        <p class="header__user-email">{{ Auth::user()->email }}</p>
    </div>

    <a href="{{ route('account', ['select=projects']) }}" class="header__link first projects-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Ваші проєкти</span>
    </a>

    <a href="{{ route('account', ['select=discounts']) }}" class="header__link second discounts-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Ваші знижки</span>
    </a>

    <a href="{{ route('account', ['select=referal']) }}" class="header__link third referal-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Реферальна програма</span>
    </a>

    <a href="{{ route('account', ['select=cash-account']) }}" class="header__link forth cash-account-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Особистий рахунок</span>
    </a>
    {{-- profile.edit --}}
    <a href="{{ route('account', ['select=settings']) }}" class="header__link fifth settings-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Налаштування</span>
    </a>
@endif
@if (Auth::user()->usertype == 'dev')
    <div class="header__user-type-email">
        <p class="header__user-type">Розробник</p>
        <p class="header__user-email">{{ Auth::user()->email }}</p>
    </div>

    <a href="{{ route('account', ['select=projects']) }}" class="header__link first projects-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Проєкти</span>
    </a>

    <a href="{{ route('account', ['select=referal']) }}" class="header__link second referal-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Реферальна програма</span>
    </a>

    <a href="{{ route('account', ['select=cash-account']) }}" class="header__link third cash-account-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Особистий рахунок</span>
    </a>
    {{-- profile.edit --}}
    <a href="{{ route('account', ['select=settings']) }}" class="header__link forth settings-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Налаштування</span>
    </a>
@endif
@if (Auth::user()->usertype == 'admin')

    <h4 class="header__form-subtitle subtitle">Система контролю розробки</h4>
    <div class="header__user-type-email">
        <p class="header__user-type">СуперАдмін</p>
        <p class="header__user-email">{{ Auth::user()->email }}</p>
    </div>

    <a href="{{ route('account', ['select=payments']) }}" class="header__link first payments-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Оплати</span>
    </a>

    <a href="{{ route('account', ['select=orders']) }}" class="header__link second orders-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Заявки</span>
    </a>

    <a href="{{ route('account', ['select=projects']) }}" class="header__link third projects-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Проєкти</span>
    </a>

    <a href="{{ route('account', ['select=users']) }}" class="header__link forth users-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Користувачі</span>
    </a>

    <a href="{{ route('account', ['select=team']) }}" class="header__link fifth team-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Команда</span>
    </a>
    {{-- profile.edit --}}
    <a href="{{ route('account', ['select=settings']) }}" class="header__link sixth settings-btn">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Налаштування</span>
    </a>
@endif

<!-- Authentication -->
<form method="POST" action="">
    @csrf
    <a class="header__link logout" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Вихід</span>
    </a>
</form>
@else
<div class="header__form-slider">
    <div>
        <form class="header__form" method="POST" action="">
            <h4 class="header__form-subtitle subtitle">Система контролю розробки</h4>
            @csrf
        
            <!-- Phone -->
            <div>
                <input id="phone" class="input-login header__input-login" type="phone" name="phone" :value="old('Phone')" required autofocus autocomplete="phone" placeholder="Ваш Телефон" />
            </div>
        
            <!-- Password -->
            <div class="mt-4">
                <input id="password" class="input-login header__input-login password"
                                type="password"
                                name="password"
                                required autocomplete="current-password" placeholder="Пароль"/>
            </div>
        
            @if (Route::has('password.request'))
                <a class="header__reset-password" href="{{ route('password.request') }}">
                {{ __('Забули пароль?') }}
                </a>
            @endif

            <button type="submit" class="form-btn-submit login">Увійти</button>
            <div class="form-btn-submit register">Реєстрація</div>
        </form>
        <form method="POST" action="">
            <h4 class="header__form-subtitle subtitle">Реєстрація</h4>
            @csrf
            <!-- Forename -->
            <div>
                <input id="forename" class="input-login input-login header__input-login" type="text" name="forename" :value="old('Forename')" required autofocus autocomplete="forename" placeholder="Імʼя" />
            </div>

            <!-- Surname -->
            <div>
                <input id="surname" class="input-login input-login header__input-login" type="text" name="surname" :value="old('Surname')" required autofocus autocomplete="surname" placeholder="Прізвище" />
            </div>

            <!-- Phone -->
            <div class="mt-4">
                <input id="phone" class="input-login input-login header__input-login" type="number" name="phone" :value="old('Phone')" required autocomplete="phone" placeholder="Ваш Телефон" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <input id="password" class="input-login input-login header__input-login"
                                type="password"
                                name="password"
                                required autocomplete="new-password" placeholder="Придумайте пароль" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <input id="password_confirmation" class="input-login input-login header__input-login"
                                type="password"
                                name="password_confirmation" required autocomplete="new-password" placeholder="Повторіть пароль" />
            </div>

            <div class="header__registr-buttons-flex">
                <div class="header__btn-login back">
                    <div></div>
                    <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                    <span>Увійти</span>
                </div>
                <button type="submit" class="form-btn-submit register">Зареєструватися</button>
            </div>
        </form>
    </div>
</div>
@endauth
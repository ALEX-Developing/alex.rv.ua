@section('title')
  <title>Система Контролю Розробки - ALEX Developing</title>
@endsection

@section('account-nav-status')
active
@endsection

@section('style')
@vite(['resources/scss/account.scss'])
@endsection

@section('js')
@vite(['resources/js/account.js'])
@endsection

@section('nav-system-control')
  @auth
    <p class="header__user-name">Вітаю, {{ Auth::user()->name }}</p>
    @if (Auth::user()->type_id == 1)
        <div class="header__user-type-email">
            <p class="header__user-type"></p>
            <p class="header__user-email">{{ Auth::user()->email }}</p>
        </div>

        <button class="header__link first projects-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Ваші проєкти</span>
        </button>

        <button class="header__link second discounts-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Ваші знижки</span>
        </button>

        <button class="header__link third referal-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Реферальна програма</span>
        </button>

        <button class="header__link forth cash-account-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Особистий рахунок</span>
        </button>
        {{-- profile.edit --}}
        <button class="header__link fifth settings-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Налаштування</span>
        </button>
    @endif
    @if (Auth::user()->type_id == 2)
        <div class="header__user-type-email">
            <p class="header__user-type">Розробник</p>
            <p class="header__user-email">{{ Auth::user()->email }}</p>
        </div>

        <button class="header__link first projects-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Проєкти</span>
        </button>

        <button class="header__link second referal-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Реферальна програма</span>
        </button>

        <button class="header__link third cash-account-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Особистий рахунок</span>
        </button>
        {{-- profile.edit --}}
        <button class="header__link forth settings-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Налаштування</span>
        </button>
    @endif
    @if (Auth::user()->type_id == 3)
        <div class="header__user-type-email">
            <p class="header__user-type">СуперАдмін</p>
            <p class="header__user-email">{{ Auth::user()->email }}</p>
        </div>

        <button class="header__link first payments-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Оплати</span>
        </button>

        <button class="header__link second orders-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Заявки</span>
        </button>

        <button class="header__link third projects-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Проєкти</span>
        </button>

        <button class="header__link forth users-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Користувачі</span>
        </button>

        <button class="header__link fifth team-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Команда</span>
        </button>
        {{-- profile.edit --}}
        <button class="header__link sixth settings-btn">
            <div></div>
            <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
            <span>Налаштування</span>
        </button>
    @endif

    <!-- Exit -->
    <form method="POST" action="{{ route('logout') }}">
      @csrf
      <a class="header__link logout" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
        <div></div>
        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
        <span>Вихід</span>
      </a>
    </form>
  @endauth
@endsection

<x-app>
  @if (Auth::user()->type_id == 1)
      <section class="user">
          <div class="user__container container">
              <div class="user__title-type">
                  <h1 class="user__title title">Система контролю розробки</h1>
              </div>
              <div class="user__block-description">
                  <h3 class="user__paragraf paragraf">Це наша фішка</h3>
                  <h3 class="user__paragraf paragraf">Дає змогу відстежувати прогрес розробки зручно та режимі онлайн. </h3>
                  <h3 class="user__paragraf paragraf">Вносити правки та побажання під час розробки, а не в кінці.</h3>
                  <h3 class="user__paragraf paragraf">Слідкувати за домовленими термінами розробки, в які ми завжди вкладаємося.</h3>
                  <h3 class="user__paragraf paragraf">Можлива оплата частинами</h3>
              </div>
              <div class="user__selector">
                  <div class="user__selector-btns-slider">
                      <button class="user__select-btn projects first active">
                          <div></div>
                          <span>Проєкти</span>
                      </button>
                      <button class="user__select-btn discounts second">
                          <div></div>
                          <span>Ваші знижки</span>
                      </button>
                      <button class="user__select-btn referal third">
                          <div></div>
                          <span>Реферальна програма</span>
                      </button>
                      <button class="user__select-btn cash-account forth">
                          <div></div>
                          <span>Особистий рахунок</span>
                      </button>
                      <button class="user__select-btn settings fifth">
                          <div></div>
                          <span>Налаштування</span>
                      </button>
                  </div>
              </div>
              <div class="user__slider">
                  <div>
                      <div class="user__slider-item first">
                          <h2 class="subtitle">Проєкти</h2>
                      </div>
                      <div class="user__slider-item second">
                          <h2 class="subtitle">Ваші знижки</h2>
                      </div>
                      <div class="user__slider-item third">
                          <h2 class="subtitle">Реферальна програма</h2>
                      </div>
                      <div class="user__slider-item forth">
                          <h2 class="subtitle">Особистий рахунок</h2>
                      </div>
                      <div class="user__slider-item fifth">
                          <h2 class="subtitle">Налаштування</h2>
                      </div>
                  </div>
              </div>
          </div>
      </section>
  @endif
  @if (Auth::user()->type_id == 2)
    <section class="user">
        <div class="user__container container">
            <div class="user__title-type">
                <h1 class="user__title title">Система контролю розробки</h1>
                <h3 class="user__type">Розробник</h3>
            </div>
            <div class="user__selector">
                <div class="user__selector-btns-slider">
                    <button class="user__select-btn projects first active">
                        <div></div>
                        <span>Проєкти</span>
                    </button>
                    <button class="user__select-btn referal second">
                        <div></div>
                        <span>Реферальна програма</span>
                    </button>
                    <button class="user__select-btn cash-account third">
                        <div></div>
                        <span>Особистий рахунок</span>
                    </button>
                    <button class="user__select-btn settings forth">
                        <div></div>
                        <span>Налаштування</span>
                    </button>
                </div>
            </div>
            <div class="user__slider">
                <div>
                    <div class="user__slider-item first">
                        <h2 class="subtitle">Проєкти</h2>
                    </div>
                    <div class="user__slider-item second">
                        <h2 class="subtitle">Реферальна програма</h2>
                    </div>
                    <div class="user__slider-item third">
                        <h2 class="subtitle">Особистий рахунок</h2>
                    </div>
                    <div class="user__slider-item forth">
                        <h2 class="subtitle">Налаштування</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
  @endif
  @if (Auth::user()->type_id == 3)
    <section class="user">
      <div class="user__container container">
        <div class="user__title-type">
          <h1 class="user__title title">Система контролю розробки</h1>
          <h3 class="user__type">СуперАдмін</h3>
        </div>
        <div class="user__selector">
            <div class="user__selector-btns-slider">
                <button class="user__select-btn payments first active">
                    <div></div>
                    <span>Оплати</span>
                </button>
                <button class="user__select-btn orders second">
                    <div></div>
                    <span>Заявки</span>
                </button>
                <button class="user__select-btn projects third">
                    <div></div>
                    <span>Проєкти</span>
                </button>
                <button class="user__select-btn users forth">
                    <div></div>
                    <span>Користувачі</span>
                </button>
                <button class="user__select-btn team fifth">
                    <div></div>
                    <span>Команда</span>
                </button>
                <button class="user__select-btn settings sixth">
                    <div></div>
                    <span>Налаштування</span>
                </button>
            </div>
        </div>
        <div class="user__slider">
          <div>
            <div class="user__slider-item first">
              <div class="bigselector">
                <div class="bigselector__btns-slider">
                  <button class="bigselector__btn first active">
                    <div></div>
                    <span>Очікує підтвердження</span>
                  </button>
                  <button class="bigselector__btn second">
                    <div></div>
                    <span>Заявки на вивід</span>
                  </button>
                </div>
              </div>
              <div class="bigselector__container">
                <div>
                  <div class="bigselector__item first">
                    <div class="selector">
                      <div class="selector__btns-slider">
                        <button class="selector__btn first active">
                          <div></div>
                          <span>Очікує</span>
                        </button>
                        <button class="selector__btn second">
                          <div></div>
                          <span>Архів</span>
                        </button>
                        <button class="selector__btn third">
                          <div></div>
                          <span>Здійснені</span>
                        </button>
                      </div>
                    </div>
                    <div class="selector__container">
                      <div>
                        <div class="selector__item first">
                          
                        </div>
                        <div class="selector__item second">
    
                        </div>
                        <div class="selector__item third">
    
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bigselector__item second">
                    <div class="selector">
                      <div class="selector__btns-slider">
                        <button class="selector__btn first active">
                          <div></div>
                          <span>Очікує</span>
                        </button>
                        <button class="selector__btn second">
                          <div></div>
                          <span>Здійснені</span>
                        </button>
                      </div>
                    </div>
                    <div class="selector__container">
                      <div>
                        <div class="selector__item first">
                          
                        </div>
                        <div class="selector__item second">
  
                        </div>
                        <div class="selector__item third">

                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="user__slider-item second">
              <div class="bigselector">
                <div class="bigselector__btns-slider">
                  <button class="bigselector__btn first active">
                    <div></div>
                    <span>Усі</span>
                  </button>
                  <button class="bigselector__btn second">
                    <div></div>
                    <span>Розрахунок ціни</span>
                  </button>
                  <button class="bigselector__btn third">
                    <div></div>
                    <span>Замовлення</span>
                  </button>
                  <button class="bigselector__btn forth">
                    <div></div>
                    <span>Консультація</span>
                  </button>
                  <button class="bigselector__btn fifth">
                    <div></div>
                    <span>Зворотній звʼязок</span>
                  </button>
                </div>
              </div>
              <div class="bigselector__container">
                <div>
                  <div class="bigselector__item first">
                    <div class="selector">
                      <div class="selector__btns-slider">
                        <button class="selector__btn first active">
                          <div></div>
                          <span>Нові</span>
                        </button>
                        <button class="selector__btn second">
                          <div></div>
                          <span>Оформлені</span>
                        </button>
                        <button class="selector__btn third">
                          <div></div>
                          <span>Архів</span>
                        </button>
                      </div>
                    </div>
                    <div class="selector__container">
                      <div>
                        <div class="selector__item first">
                          @foreach ($orders->whereIn('order_type_id', [1, 2, 3])->where('order_status_id', 1) as $order)
                            <div class="order">
                              <div class="order__id">Заявка №{{ $order->id }}</div>
                              @if ($order->is_login)
                                <div class="order__is-login">Користувач в системі (user_id: {{ $order->user_id }})</div>
                              @endif
                              <div class="order__name-phone">
                                <div class="order__name">{{ $order->name }}</div>
                                <div class="order__phone">тел. <span class="order__phone-value">{{ $order->phone }}</span></div>
                              </div>
                              <div class="order__btns">
                                <form action="{{ route('orders.archive', $order) }}" method="POST">
                                  @csrf
                                  <button type="submit" class="order__control-btn red">
                                    <div></div>
                                    <span>В архів</span>
                                  </button>
                                </form>
                                <div class="order__right-btns">
                                  <form action="{{ route('orders.success', $order) }}" method="POST">
                                    @csrf
                                    <button class="order__control-btn">
                                      <div></div>
                                      <span>В оформлені</span>
                                    </button>
                                  </form>
                                  <form action="#" method="POST">
                                    @csrf
                                    <button class="order__control-btn active">
                                      <div></div>
                                      <span>Створити проєкт</span>
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                        <div class="selector__item second">
                          @foreach ($orders->whereIn('order_type_id', [1, 2, 3])->where('order_status_id', 2)->sortByDesc('created_at') as $order)
                            <div class="order">
                              <div class="order__id">Заявка №{{ $order->id }}</div>
                              @if ($order->is_login)
                                <div class="order__is-login">Користувач в системі (user_id: {{ $order->user_id }})</div>
                              @endif
                              <div class="order__name-phone">
                                <div class="order__name">{{ $order->name }}</div>
                                <div class="order__phone">тел. <span class="order__phone-value">{{ $order->phone }}</span></div>
                              </div>
                              <div class="order__btns">
                                <form action="{{ route('orders.archive', $order) }}" method="POST">
                                  @csrf
                                  <button type="submit" class="order__control-btn red">
                                    <div></div>
                                    <span>В архів</span>
                                  </button>
                                </form>
                                <div class="order__right-btns">
                                  <form action="{{ route('orders.new', $order) }}" method="POST">
                                    @csrf
                                    <button class="order__control-btn">
                                      <div></div>
                                      <span>В нові</span>
                                    </button>
                                  </form>
                                  <form action="#" method="POST">
                                    @csrf
                                    <button class="order__control-btn active">
                                      <div></div>
                                      <span>Створити проєкт</span>
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                        <div class="selector__item third">
                          @foreach ($orders->whereIn('order_type_id', [1, 2, 3])->where('order_status_id', 3)->sortByDesc('created_at') as $order)
                            <div class="order">
                              <div class="order__id">Заявка №{{ $order->id }}</div>
                              @if ($order->is_login)
                                <div class="order__is-login">Користувач в системі (user_id: {{ $order->user_id }})</div>
                              @endif
                              <div class="order__name-phone">
                                <div class="order__name">{{ $order->name }}</div>
                                <div class="order__phone">тел. <span class="order__phone-value">{{ $order->phone }}</span></div>
                              </div>
                              <div class="order__btns">
                                <div></div>
                                <div class="order__right-btns">
                                  <form action="{{ route('orders.new', $order) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="order__control-btn">
                                      <div></div>
                                      <span>В нові</span>
                                    </button>
                                  </form>
                                  <form action="{{ route('orders.success', $order) }}" method="POST">
                                    @csrf
                                    <button class="order__control-btn">
                                      <div></div>
                                      <span>В оформлені</span>
                                    </button>
                                  </form>
                                  <form action="#" method="POST">
                                    @csrf
                                    <button class="order__control-btn active">
                                      <div></div>
                                      <span>Створити проєкт</span>
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bigselector__item second">
                    <div class="selector">
                      <div class="selector__btns-slider">
                        <button class="selector__btn first active">
                          <div></div>
                          <span>Нові</span>
                        </button>
                        <button class="selector__btn second">
                          <div></div>
                          <span>Оформлені</span>
                        </button>
                        <button class="selector__btn third">
                          <div></div>
                          <span>Архів</span>
                        </button>
                      </div>
                    </div>
                    <div class="selector__container">
                      <div>
                        <div class="selector__item first">
                          
                        </div>
                        <div class="selector__item second">
    
                        </div>
                        <div class="selector__item third">
    
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bigselector__item third">
                    <div class="selector">
                      <div class="selector__btns-slider">
                        <button class="selector__btn first active">
                          <div></div>
                          <span>Нові</span>
                        </button>
                        <button class="selector__btn second">
                          <div></div>
                          <span>Оформлені</span>
                        </button>
                        <button class="selector__btn third">
                          <div></div>
                          <span>Архів</span>
                        </button>
                      </div>
                    </div>
                    <div class="selector__container">
                      <div>
                        <div class="selector__item first">
                          
                        </div>
                        <div class="selector__item second">
    
                        </div>
                        <div class="selector__item third">
    
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bigselector__item forth">
                    <div class="selector">
                      <div class="selector__btns-slider">
                        <button class="selector__btn first active">
                          <div></div>
                          <span>Нові</span>
                        </button>
                        <button class="selector__btn second">
                          <div></div>
                          <span>Оформлені</span>
                        </button>
                        <button class="selector__btn third">
                          <div></div>
                          <span>Архів</span>
                        </button>
                      </div>
                    </div>
                    <div class="selector__container">
                      <div>
                        <div class="selector__item first">
                          
                        </div>
                        <div class="selector__item second">
    
                        </div>
                        <div class="selector__item third">
    
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="bigselector__item fifth">
                    <div class="selector">
                      <div class="selector__btns-slider">
                        <button class="selector__btn first active">
                          <div></div>
                          <span>Нові</span>
                        </button>
                        <button class="selector__btn second">
                          <div></div>
                          <span>Оформлені</span>
                        </button>
                        <button class="selector__btn third">
                          <div></div>
                          <span>Архів</span>
                        </button>
                      </div>
                    </div>
                    <div class="selector__container">
                      <div>
                        <div class="selector__item first">
                          @foreach ($orders->where('order_type_id', 1)->where('order_status_id', 1) as $order)
                            <div class="order">
                              <div class="order__id">Заявка №{{ $order->id }}</div>
                              @if ($order->is_login)
                                <div class="order__is-login">Користувач в системі (user_id: {{ $order->user_id }})</div>
                              @endif
                              <div class="order__name-phone">
                                <div class="order__name">{{ $order->name }}</div>
                                <div class="order__phone">тел. <span class="order__phone-value">{{ $order->phone }}</span></div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                        <div class="selector__item second">
                          @foreach ($orders->where('order_type_id', 1)->where('order_status_id', 2) as $order)
                            <div class="order">
                              <div class="order__id">Заявка №{{ $order->id }}</div>
                              @if ($order->is_login)
                                <div class="order__is-login">Користувач в системі (user_id: {{ $order->user_id }})</div>
                              @endif
                              <div class="order__name-phone">
                                <div class="order__name">{{ $order->name }}</div>
                                <div class="order__phone">тел. <span class="order__phone-value">{{ $order->phone }}</span></div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                        <div class="selector__item third">
                          @foreach ($orders->where('order_type_id', 1)->where('order_status_id', 3) as $order)
                            <div class="order">
                              <div class="order__id">Заявка №{{ $order->id }}</div>
                              @if ($order->is_login)
                                <div class="order__is-login">Користувач в системі (user_id: {{ $order->user_id }})</div>
                              @endif
                              <div class="order__name-phone">
                                <div class="order__name">{{ $order->name }}</div>
                                <div class="order__phone">тел. <span class="order__phone-value">{{ $order->phone }}</span></div>
                              </div>
                            </div>
                          @endforeach
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="user__slider-item third">
              <div class="selector">
                <div class="selector__btns-slider">
                  <button class="selector__btn first active">
                    <div></div>
                    <span>Усі</span>
                  </button>
                  <button class="selector__btn second">
                    <div></div>
                    <span>В розробці</span>
                  </button>
                  <button class="selector__btn third">
                    <div></div>
                    <span>Завершені</span>
                  </button>
                  <button class="selector__btn forth">
                    <div></div>
                    <span>Опубліковані</span>
                  </button>
                  <button class="selector__btn fifth">
                    <div></div>
                    <span>Очікують оплату</span>
                  </button>
                </div>
              </div>
              <div class="selector__container">
                <div>
                  <div class="selector__item first">
                    <div class="create-project">
                      <div class="create-project__plus-icon">
                        <span></span>
                        <span></span>
                      </div>
                      <h3 class="create-project__text">Створити новий проєкт</h3>
                    </div>
                    @foreach ($projects as $project)
                      <div class="project">
                        <div class="project__name-price">
                          <h3 class="project__name subtitle">{{ $project->name }}</h3>
                          <h3 class="project__price subtitle">
                            <span class="desc">Загальна ціна: </span>
                            <span class="amount">${{ $totals[$project->id] }}</span>
                          </h3>
                        </div>
                        <div class="project__payments">
                          <div class="project__payments-slider">
                            @foreach ($project->payments as $index => $payment)
                              <div class="project__payment {{ $payment->execution_date ? ' success' : '' }} {{ $payment->deferred_date ? ' waiting' : '' }}">
                                @if ($payment->deferred_date)
                                  <div class="project__payment-deferred">Відтермінований до {{ \Carbon\Carbon::parse($payment->deferred_date)->format('d.m.Y') }}</div>
                                @endif
                                <span>Внесок №{{ $index + 1 }}, до {{ \Carbon\Carbon::parse($payment->scheduled_date)->format('d.m.Y') }}:</span>
                                <span class="project__payment-amount">${{ $payment->amount }}</span>
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="selector__item second">
                    @foreach ($projects->where('current_stage', '<', 100)->where('is_awaiting_payment', false) as $project)
                      <div class="project">
                        <div class="project__name-price">
                          <h3 class="project__name subtitle">{{ $project->name }}</h3>
                          <h3 class="project__price subtitle">
                            <span class="desc">Загальна ціна: </span>
                            <span class="amount">${{ $totals[$project->id] }}</span>
                          </h3>
                        </div>
                        <div class="project__payments">
                          <div class="project__payments-slider">
                            @foreach ($project->payments as $index => $payment)
                              <div class="project__payment {{ $payment->execution_date ? ' success' : '' }} {{ $payment->deferred_date ? ' waiting' : '' }}">
                                @if ($payment->deferred_date)
                                  <div class="project__payment-deferred">Відтермінований до {{ \Carbon\Carbon::parse($payment->deferred_date)->format('d.m.Y') }}</div>
                                @endif
                                <span>Внесок №{{ $index + 1 }}, до {{ \Carbon\Carbon::parse($payment->scheduled_date)->format('d.m.Y') }}:</span>
                                <span class="project__payment-amount">${{ $payment->amount }}</span>
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="selector__item third">
                    @foreach ($projects->where('current_stage', 100) as $project)
                      <div class="project">
                        <div class="project__name-price">
                          <h3 class="project__name subtitle">{{ $project->name }}</h3>
                          <h3 class="project__price subtitle">
                            <span class="desc">Загальна ціна: </span>
                            <span class="amount">${{ $totals[$project->id] }}</span>
                          </h3>
                        </div>
                        <div class="project__payments">
                          <div class="project__payments-slider">
                            @foreach ($project->payments as $index => $payment)
                              <div class="project__payment {{ $payment->execution_date ? ' success' : '' }} {{ $payment->deferred_date ? ' waiting' : '' }}">
                                @if ($payment->deferred_date)
                                  <div class="project__payment-deferred">Відтермінований до {{ \Carbon\Carbon::parse($payment->deferred_date)->format('d.m.Y') }}</div>
                                @endif
                                <span>Внесок №{{ $index + 1 }}, до {{ \Carbon\Carbon::parse($payment->scheduled_date)->format('d.m.Y') }}:</span>
                                <span class="project__payment-amount">${{ $payment->amount }}</span>
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="selector__item forth">
                    @foreach ($projects->where('is_published', true) as $project)
                      <div class="project">
                        <div class="project__name-price">
                          <h3 class="project__name subtitle">{{ $project->name }}</h3>
                          <h3 class="project__price subtitle">
                            <span class="desc">Загальна ціна: </span>
                            <span class="amount">${{ $totals[$project->id] }}</span>
                          </h3>
                        </div>
                        <div class="project__payments">
                          <div class="project__payments-slider">
                            @foreach ($project->payments as $index => $payment)
                              <div class="project__payment {{ $payment->execution_date ? ' success' : '' }} {{ $payment->deferred_date ? ' waiting' : '' }}">
                                @if ($payment->deferred_date)
                                  <div class="project__payment-deferred">Відтермінований до {{ \Carbon\Carbon::parse($payment->deferred_date)->format('d.m.Y') }}</div>
                                @endif
                                <span>Внесок №{{ $index + 1 }}, до {{ \Carbon\Carbon::parse($payment->scheduled_date)->format('d.m.Y') }}:</span>
                                <span class="project__payment-amount">${{ $payment->amount }}</span>
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="selector__item fifth">
                    @foreach ($projects->where('is_awaiting_payment', true) as $project)
                      <div class="project">
                        <div class="project__name-price">
                          <h3 class="project__name subtitle">{{ $project->name }}</h3>
                          <h3 class="project__price subtitle">
                            <span class="desc">Загальна ціна: </span>
                            <span class="amount">${{ $totals[$project->id] }}</span>
                          </h3>
                        </div>
                        <div class="project__payments">
                          <div class="project__payments-slider">
                            @foreach ($project->payments as $index => $payment)
                              <div class="project__payment {{ $payment->execution_date ? ' success' : '' }} {{ $payment->deferred_date ? ' waiting' : '' }}">
                                @if ($payment->deferred_date)
                                  <div class="project__payment-deferred">Відтермінований до {{ \Carbon\Carbon::parse($payment->deferred_date)->format('d.m.Y') }}</div>
                                @endif
                                <span>Внесок №{{ $index + 1 }}, до {{ \Carbon\Carbon::parse($payment->scheduled_date)->format('d.m.Y') }}:</span>
                                <span class="project__payment-amount">${{ $payment->amount }}</span>
                              </div>
                            @endforeach
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="user__slider-item forth">
              <div class="selector">
                <div class="selector__btns-slider">
                  <button class="selector__btn first active">
                    <div></div>
                    <span>Усі</span>
                  </button>
                  <button class="selector__btn second">
                    <div></div>
                    <span>Активні</span>
                  </button>
                  <button class="selector__btn third">
                    <div></div>
                    <span>Пасивні</span>
                  </button>
                </div>
              </div>
              <div class="selector__container">
                <div>
                  <div class="selector__item first">
                    @foreach ($users->where('type_id', 1) as $user)
                      <div class="user-block">
                        <div class="user-block__name-balance">
                          <h3 class="user-block__name subtitle">{{ $user->name }}</h3>
                          <h3 class="user-block__balance subtitle">
                            <span class="desc">Баланс рахунку: </span>
                            <span class="amount">${{ number_format($user->balance, 2) }}</span>
                          </h3>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="selector__item second">
                    @foreach ($users->where('type_id', 1)->where('referal_code') as $user)
                      <div class="user-block">
                        <div class="user-block__name-balance">
                          <h3 class="user-block__name subtitle">{{ $user->name }}</h3>
                          <h3 class="user-block__balance subtitle">
                            <span class="desc">Баланс рахунку: </span>
                            <span class="amount">${{ number_format($user->balance, 2) }}</span>
                          </h3>
                        </div>
                      </div>
                    @endforeach
                  </div>
                  <div class="selector__item third">
                    @foreach ($users->where('type_id', 1)->where('referal_code', null) as $user)
                      <div class="user-block">
                        <div class="user-block__name-balance">
                          <h3 class="user-block__name subtitle">{{ $user->name }}</h3>
                          <h3 class="user-block__balance subtitle">
                            <span class="desc">Баланс рахунку: </span>
                            <span class="amount">${{ number_format($user->balance, 2) }}</span>
                          </h3>
                        </div>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>
            </div>
            <div class="user__slider-item fifth">
              @foreach ($users->where('type_id', 2) as $user)
                <div class="user-block">
                  <div class="user-block__name-balance">
                    <h3 class="user-block__name subtitle">{{ $user->name }}</h3>
                    <h3 class="user-block__balance subtitle">
                      <span class="desc">Баланс рахунку: </span>
                      <span class="amount">${{ number_format($user->balance, 2) }}</span>
                    </h3>
                  </div>
                </div>
              @endforeach
            </div>
            <div class="user__slider-item sixth">
              <div class="total-balance">
                <span class="total-balance__description">Загальна сума на балансах користувачів та команди: </span>
                <span class="total-balance__amount">${{ number_format($usersTotalBalance, 2) }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endif
</x-app>
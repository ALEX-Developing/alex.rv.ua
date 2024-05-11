@section('title')
  <title>Price - ALEX Developing</title>
@endsection

@section('price-nav-status')
active
@endsection

@section('nav-system-control')
  <x-account-popup-public>
  </x-account-popup-public>
@endsection

@section('style')
@vite(['resources/scss/price.scss'])
@endsection

@section('js')
@vite(['resources/js/price.js'])
@endsection

<x-app-layout>
  <section class="top">
    <div class="top__container container">
      <div class="top__left-block">
        <h1 class="top__title title"><strong>Прайси</strong></h1>
        <p class="top__paragraf paragraf">Відображений широкий спектр послуги, які ми надаємо, та ціни до кожної послуги</p>
        <p class="top__paragraf paragraf">+ Приклади готових проєктів</p>
        <p class="top__paragraf paragraf">+ Розрахунок ціни персонально</p>
        <p class="top__paragraf paragraf">+ Безкоштовна консультація до будь якої з послуг</p>
      </div>
      <div class="top__right-block">
        <div class="text">
          <h2 class="top__subtitle discount subtitle">Знижка -5% на всі послуги</h2>
          <p class="top__paragraf discount paragraf">при <a href="#" class="top__link-sign-up">реєстації</a> в системі контролю розробки</p>
        </div>
      </div>
    </div>
  </section>

  <section class="services">
    <div class="services__container container">
      <div class="services__filter">
        <button class="services__filter-btn create active"><div></div><span>Розробка сайтів</span></button>
        <button class="services__filter-btn service"><div></div><span>ALEX Сервіс</span></button>
      </div>
      <div class="services__lists">
        <div class="services__lists-slider">
          <div class="services__list create">
            <div class="services__list-flex-line">
              <a href="./create/landing-page" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Лендінг</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">700-1800$</h6>
                    <div class="services__list-item-time">
                      <span>15-20 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/landing.webp') }}" alt="landing" class="services__list-item-image">
              </a>
              <a href="./create/online-shop" class="services__list-item border-animation border-anim-active">
                <div class="services__list-item-popular">Популярний</div>
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Сайт візитка</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">800-2000$</h6>
                    <div class="services__list-item-time">
                      <span>20-30 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/business-card.jpg') }}" alt="business-card" class="services__list-item-image">
              </a>
            </div>
            <div class="services__list-flex-line">
              <a href="#" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Корпоративний сайт</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">1200-3000$</h6>
                    <div class="services__list-item-time">
                      <span>30-45 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/corporation.png') }}" alt="corporation" class="services__list-item-image">
              </a>
              <a href="#" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Інтернет-магазин</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">1800-4000$</h6>
                    <div class="services__list-item-time">
                      <span>30-60 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/online-shop.png') }}" alt="online-shop" class="services__list-item-image">
              </a>
            </div>
            <div class="services__list-flex-line">
              <a href="#" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Сайт-каталог</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">1500-3000$</h6>
                    <div class="services__list-item-time">
                      <span>25-50 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/catalog.png') }}" alt="catalog" class="services__list-item-image">
              </a>
              <a href="#" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Дошка-оголошень</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">4000-7000$</h6>
                    <div class="services__list-item-time">
                      <span>40-60 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/marketplace.jpg') }}" alt="marketplace" class="services__list-item-image">
              </a>
            </div>
            <div class="services__list-flex-line">
              <a href="#" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Сайт портал</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">від 6000$</h6>
                    <div class="services__list-item-time">
                      <span>50-90 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/portal.png') }}" alt="portal" class="services__list-item-image">
              </a>
              <a href="#" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Промо сайт</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">600-1500$</h6>
                    <div class="services__list-item-time">
                      <span>10-20 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/promo.jpg') }}" alt="promo" class="services__list-item-image">
              </a>
            </div>
            <div class="services__list-flex-line">
              <a href="#" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Індивідуальный сайт</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">розрахуємо персонально</h6>
                  </div>
                </div>
                <img src="{{ URL('img/price/create/personal.png') }}" alt="personal" class="services__list-item-image">
              </a>
            </div>
          </div>
          <div class="services__list service">
            <div class="services__list-flex-line">
              <a href="./create/online-shop" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Налаштування CEO</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">400-800$</h6>
                    <div class="services__list-item-time">
                      <span>20-30 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/service/seo.png') }}" alt="SEO" class="services__list-item-image">
              </a>
              <a href="./create/online-shop" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Модернізація сайту</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">від 200$</h6>
                    <div class="services__list-item-time">
                      <span>20-30 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/service/update.jpg') }}" alt="update" class="services__list-item-image">
              </a>
            </div>
            <div class="services__list-flex-line">
              <a href="./create/online-shop" class="services__list-item border-animation">
                <div class="services__list-item-info">
                  <h5 class="services__list-item-title">Технічна підтримка сайтів</h5>
                  <div class="services__list-item-price-time">
                    <h6 class="services__list-item-price">від 200$</h6>
                    <div class="services__list-item-time">
                      <span>20-30 днів</span>
                      <img src="{{ URL('img/timer.png') }}" alt="timer" class="services__list-item-time-icon">
                    </div>
                  </div>
                </div>
                <img src="{{ URL('img/price/service/tech-support.jpg') }}" alt="tech-support" class="services__list-item-image">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-app-layout>
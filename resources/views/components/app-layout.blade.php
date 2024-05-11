<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-RP1XFLB53B"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
      
          gtag('config', 'G-RP1XFLB53B');
        </script>
        <link data-default-icon="{{ URL('favicon.ico') }}" rel="shortcut icon" type="{{ URL('favicon.ico') }}">
        <link rel="icon" type="image/x-icon" href="{{ URL('favicon.ico') }}">
        <link rel="icon" sizes="192x192" href="{{ URL('img/favicon-192.png') }}">
        <link rel="icon" sizes="128x128" href="{{ URL('img/favicon-128.png') }}">
        <link rel="icon" sizes="any" type="image/svg+xml" href="{{ URL('img/favicon.svg') }}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{ URL('img/apple-touch-76.png') }}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{ URL('img/apple-touch-120.png') }}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{ URL('img/apple-touch-152.png') }}">
        <link rel="apple-touch-icon" sizes="167x167" href="{{ URL('img/apple-touch-167.png') }}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{ URL('img/apple-touch-180.png') }}">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">
      
        @yield('title')
        @vite(['resources/scss/app.scss'])
        @yield('style')
    </head>
    <body class="font-sans antialiased">
        <div class="contacts-block">
            <div class="contacts-block__contacts">
            </div>
        </div>
        
        <div class="circle">
            <h5 class="circle__h5">клік</h5>
        </div>
    
        <div class="blur"></div>
    
        <div class="menu">
            <nav class="menu__nav">
                <a href="{{ route('welcome') }}" class="menu__link @yield('welcome-nav-status')">
                <div></div>
                    <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                <span>Головна</span>
                </a>
                <a href="{{ route('projects') }}" class="menu__link @yield('projects-nav-status')">
                <div></div>
                    <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                <span>Проєкти</span>
                </a>
                <a href="{{ route('team') }}" class="menu__link @yield('team-nav-status')">
                <div></div>
                    <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                <span>Команда</span>
                </a>
                <a href="{{ route('services') }}" class="menu__link @yield('price-nav-status')">
                <div></div>
                    <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                <span>Прайси</span>
                </a>
            </nav>
        </div>

        <!-- Page Heading -->
        {{-- @if (isset($header)) --}}
        
            <header class="header sticky">
                <div class="container header__container">
                    <a href="{{ route('welcome') }}" class="header__logo">
                    <img src="{{ URL('img/logo.svg') }}" alt="ALEX-logo" class="header__logo-img">
                    <div class="header__logo-block-text">
                        <strong class="header__logo-text"><div>ALEX</div><div class="subtitle"><div>Developing</div></div></strong>
                    </div>
                    </a>
                    <nav class="header__nav">
                    <a href="{{ route('welcome') }}" class="header__link @yield('welcome-nav-status')">
                        <div></div>
                        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                        <span>Головна</span>
                    </a>
                    <a href="{{ route('projects') }}" class="header__link @yield('projects-nav-status')">
                        <div></div>
                        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                        <span>Проєкти</span>
                    </a>
                    <a href="{{ route('team') }}" class="header__link @yield('team-nav-status')">
                        <div></div>
                        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                        <span>Команда</span>
                    </a>
                    <a href="{{ route('services') }}" class="header__link @yield('price-nav-status')">
                        <div></div>
                        <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                        <span>Прайси</span>
                    </a>
                    </nav>
                    <div class="header__right-btns">
                        <button class="header__contacts">
                            <div class="header__contacts-show"></div>
                            <div class="header__contacts-hide"></div>
                            <div class="header__contacts-block-show">Контакти</div>
                            <div class="header__contacts-block-hide">
                                <img src="{{ URL('img/xmark.svg') }}" alt="xmark" class="header__hide-logo">
                            </div>
                        </button>
                        <div class="header__btn-account @yield('account-nav-status')">
                            <div></div>
                            <div class="header__account-show"></div>
                            <div class="header__account-hide"></div>
                            <svg class="header__account-logo" width="60" height="64" viewBox="0 0 60 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_666_966)">
                                <path d="M6.72997 62.9856H52.0105C56.221 62.9856 58.7231 60.9493 58.7231 57.5671C58.7231 48.7319 47.2649 36.6524 29.3529 36.6524C11.4754 36.6524 0 48.7319 0 57.5671C0 60.9493 2.51942 62.9856 6.72997 62.9856ZM29.3702 30.6127C37.1355 30.6127 43.5032 23.8137 43.5032 15.1338C43.5032 6.72997 37.0839 0 29.3702 0C21.6566 0 15.2546 6.79899 15.2546 15.1856C15.2546 23.8137 21.6049 30.6127 29.3702 30.6127Z" fill="#6495ED"/>
                                </g>
                                <defs>
                                <clipPath id="clip0_666_966">
                                <rect width="60" height="63.0545" fill="white"/>
                                </clipPath>
                                </defs>
                            </svg>
                            <div class="header__btn-account-close-icon">
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                        <div class="header__btn-burger">
                            <div class="header__burger-show"></div>
                            <div class="header__burger-hide"></div>
                            <div class="header__burger-anim-logo">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__account-form">
                    <h4 class="header__form-subtitle subtitle">Система контролю розробки</h4>
                    @if (Route::has('login'))
                        @yield('nav-system-control')
                    @endif
                </div>
            </header>
        {{-- @endif --}}





        

        <!-- Page Content -->
        {{ $slot }}


  



        {{-- @if (isset($footer)) --}}
        <footer class="footer">
            <div class="footer__container container">
            <div class="footer__block-logo">
                <a href="{{ route('welcome') }}" class="footer__logo">
                <img src="{{ URL('img/logo.svg') }}" alt="ALEX-logo" class="footer__logo-img">
                <div class="footer__logo-block-text">
                    <h2 class="footer__logo-text"><div>ALEX</div><div class="subtitle"><div>Developing</div></div></h2>
                </div>
                </a>
            </div>
            <nav class="footer__block-nav">
                <h3 class="footer__title subtitle">Навігація:</h3>
                <a href="{{ route('welcome') }}" class="footer__link @yield('welcome-nav-status')">
                <div></div>
                <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                <span>Головна</span>
                </a>
                <a href="{{ route('projects') }}" class="footer__link @yield('projects-nav-status')">
                <div></div>
                <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                <span>Проєкти</span>
                </a>
                <a href="{{ route('team') }}" class="footer__link @yield('team-nav-status')">
                <div></div>
                <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                <span>Команда</span>
                </a>
                <a href="{{ route('services') }}" class="footer__link @yield('price-nav-status')">
                <div></div>
                <img src="{{ URL('img/back.svg') }}" alt="go-back" class="back-img">
                <span>Прайси</span>
                </a>
            </nav>
            <div class="footer__block-contacts">
                <h3 class="footer__title subtitle">Контакти:</h3>
                <div class="footer__content-contacts">
                <a href="tel:+380686006633" class="footer__contact-link"><span>(068) 600 66 33</span><div></div></a>
                <a target="_blank" href="https://t.me/Alex_Developing" class="footer__contact-link"><span>Alex_Developing</span><div></div></a>
                <a target="_blank" href="https://instagram.com/alex.developing/" class="footer__contact-link"><span>alex.developing</span><div></div></a>
                <a href="mailto:dev@alex.rv.ua" class="footer__contact-link"><span>dev@alex.rv.ua</span><div></div></a>
                </div>
            </div>
            <form class="footer__block-contact-form">
                <h3 class="footer__title subtitle">Звʼяжемося з Вами:</h3>
                <div class="footer__block-form">
                <input placeholder="Iмʼя, Прізвище" type="text" class="footer__name">
                <input placeholder="(068) 600 66 33" type="text" class="footer__phone">
                <button class="footer__btn-submit">Надіслати</button>
                </div>
            </form>
            </div>
        </footer>
        <div class="footer__marginb"></div>
        {{-- @endif --}}
        
        <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
        @vite(['resources/js/app.js'])
        @yield('js')
    </body>
</html>

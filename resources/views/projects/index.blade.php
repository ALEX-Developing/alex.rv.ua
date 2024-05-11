@section('title')
  <title>Projects - ALEX Developing</title>
@endsection

@section('projects-nav-status')
active
@endsection

@section('nav-system-control')
  <x-account-popup-public>
  </x-account-popup-public>
@endsection

@section('style')
@vite(['resources/scss/projects.scss'])
@endsection

@section('js')
@vite(['resources/js/projects.js'])
@endsection

<x-app>
  <section class="top">
    <div class="top__container container">
      <h1 class="top__title title">Наші Проєкти</h1>
      <p class="top__paragraf paragraf">
        Повністю готові сайти, які допомагають клієнтам розвивати свій бізнес
      </p>
    </div>
  </section>

  <section class="projects">
    <div class="projects__container container">
      <div class="projects__flex-line">
        <a href="gordiichuk.com" class="projects__project border-animation">
          <div class="projects__blur">Карта відключень світла (м.Рівне)</div>
          <img src="{{ URL('img/projects/alex-map.png') }}" alt="gordiichuk.com" class="projects__project-image">
        </a>
        <a href="evil-lev.tech" class="projects__project border-animation">
          <div class="projects__blur">Девелоперська компанія (м.Львів)</div>
          <img src="{{ URL('img/projects/evil-lev.tech.png') }}" alt="evil-lev.tech" class="projects__project-image">
        </a>
      </div>
      <div class="projects__flex-line">
        <a href="greathouse.rv.ua" class="projects__project border-animation">
          <div class="projects__blur">ЖК "Great House" (м.Рівне)</div>
          <img src="{{ URL('img/projects/greathouse.png') }}" alt="greathouse.rv.ua" class="projects__project-image">
        </a>
	      <a href="aobox.tech" class="projects__project border-animation">
          <div class="projects__blur">Інвестування нерухомості</div>
          <img src="{{ URL('img/projects/aobox.tech.png') }}" alt="aobox.tech" class="projects__project-image">
        </a>
      </div>
      <div class="projects__flex-line">
	      <a href="superbulka.shop" class="projects__project border-animation">
          <div class="projects__blur">Бургерна (м.Львів)</div>
          <img src="{{ URL('img/projects/superbulka.shop.png') }}" alt="superbulka.shop" class="projects__project-image">
        </a>
	      <a href="virtual-cube.online" class="projects__project border-animation">
          <div class="projects__blur">Сфера 3D послуг (м.Київ)</div>
          <img src="{{ URL('img/projects/virtual-cube.online.png') }}" alt="virtual-cube.online" class="projects__project-image">
        </a>
      </div>
      <div class="projects__flex-line">
        <a href="g-drilling.tech" class="projects__project border-animation">
          <div class="projects__blur">Будівельні роботи та обладнення (м.Львів)</div>
          <img src="{{ URL('img/projects/g-drilling.tech.png') }}" alt="g-drilling.tech" class="projects__project-image">
        </a>
	      <a href="turbosanok.store" class="projects__project border-animation">
          <div class="projects__blur">Гумово-технічні вироби (м.Рівне)</div>
          <img src="{{ URL('img/projects/turbosanok.store.png') }}" alt="turbosanok.store" class="projects__project-image">
        </a>
      </div>
      <div class="projects__flex-line">
	      <a href="misto-green.site" class="projects__project border-animation">
          <div class="projects__blur">ЖК "Місто Грін" (м.Львів)</div>
          <img src="{{ URL('img/projects/misto-green.site.png') }}" alt="misto-green.site" class="projects__project-image">
        </a>
        <a href="greenla-park.site" class="projects__project border-animation">
          <div class="projects__blur">ЖК "Greenlive Park" (м.Львів)</div>
          <img src="{{ URL('img/projects/greenla-park.site.png') }}" alt="greenla-park.site" class="projects__project-image">
        </a>
      </div>
      <div class="projects__flex-line">
	      <a href="smile-dental-club.xyz" class="projects__project border-animation">
          <div class="projects__blur">Стоматологічні курси</div>
          <img src="{{ URL('img/projects/smile-dental-club.xyz.png') }}" alt="smile-dental-club.xyz" class="projects__project-image">
        </a>
	      <a href="g-vision.tech" class="projects__project border-animation">
          <div class="projects__blur">Стоматологія</div>
          <img src="{{ URL('img/projects/g-vision.tech.png') }}" alt="g-vision.tech" class="projects__project-image">
        </a>
      </div>
    </div>
  </section>
</x-app>
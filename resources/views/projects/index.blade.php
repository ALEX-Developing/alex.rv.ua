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
@vite(['resources/js/project.js'])
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
      @foreach ($projects as $project)
        <a href="{{ route('projects.show', ['name' => $project->name]) }}" class="projects__project border-animation">
          <div class="projects__blur">{{ $project->title }}</div>
          <img src="{{ asset('img/projects/' . $project->name . '.png') }}" alt="{{ $project->name }}" class="projects__project-image">
        </a>
      @endforeach
    </div>
  </section>
</x-app>
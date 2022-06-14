@extends('const.main')
<!--intro  -->
@section('title')
    Главная
@endsection
@section('content')
    <!--intro  -->
    <section id="intro" class="intro">
      <div class="container">
        <div class="intro__inner">
          <div class="intro__content">
            <h1 class="intro__title">IS PROJECT GROUP –</h1>
            <p class="intro__subtitle">
              проектирование и строительство нежилых помещений
            </p>
            <p class="intro__text">
              IS Project Group - доверьте проектирование профессионалам!
            </p>
            <button class="button intro__button">Смотреть подробнее</button>
          </div>
          <button class="intro__arrow">
            <img src="../images/icons/arrow-down.svg" alt="down" />
          </button>
        </div>
      </div>
    </section>

@endsection

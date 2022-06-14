@extends('const.main')
<!--intro  -->
@section('title')
    Главная
@endsection
@section('content')
    @php
        $src = $data->image;
        $url = str_replace('\\', '/', $src);
    @endphp
    <!--intro  -->
    <section id="engineering-page__intro" class="engineering-page__intro">
      <div class="container">
        <div class="breadcrumbs engineering-page__breadcrumbs">
          <a href="/" class="breadcrumbs__link active">Главная</a>
          <span class="breadcrumbs__link">-</span>
          <p class="breadcrumbs__link">{{ $data->title }}</p>
        </div>
        <h2 class="page__title engineering-page__intro-title">{{ $data->title }}</h2>
        <div
          class="engineering-page__intro-content"
          style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})"
        >
          <div class="engineering-page__intro-content__line"></div>
          <p class="engineering-page__intro-content__text">
              {{ $data->content }}
          </p>
        </div>
      </div>
    </section>

    <!-- steps -->
    <section id="engineering-page__steps" class="engineering-page__steps">
      <div class="container">
        <div class="engineering-page__steps-content">
          <div class="engineering-page__steps-item">
            <div class="engineering-page__steps-item__icon">
              <img src="../images/engineering/icons/engineering-icon-number1.svg" />
            </div>
            <p class="engineering-page__steps-item__text">{{ $data->step1 }}</p>
          </div>
          <div class="engineering-page__steps-item">
            <div class="engineering-page__steps-item__icon">
              <img src="../images/engineering/icons/engineering-icon-number2.svg" />
            </div>
            <p class="engineering-page__steps-item__text">
                {{ $data->step2 }}
            </p>
          </div>
          <div class="engineering-page__steps-item">
            <div class="engineering-page__steps-item__icon">
              <img src="../images/engineering/icons/engineering-icon-number3.svg" />
            </div>
            <p class="engineering-page__steps-item__text">
                {{ $data->step3 }}
            </p>
          </div>
          <div class="engineering-page__steps-item">
            <div class="engineering-page__steps-item__icon">
              <img src="../images/engineering/icons/engineering-icon-number4.svg" />
            </div>
            <p class="engineering-page__steps-item__text">
                {{ $data->step4 }}
            </p>
          </div>
        </div>
      </div>
    </section>

    <!-- badges -->
    <section id="engineering-page__badges" class="engineering-page__badges">
      <div class="container">
        <div class="engineering-page__badges-content">
          <div class="engineering-page__badges-item">
            <img
              class="engineering-page__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo1)  }}"
            />
            <div class="engineering-page__badges-text">
                {!! $data->content1 !!}
            </div>
          </div>
          <div class="engineering-page__badges-item">
            <img
              class="engineering-page__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo2) }}"
            />
            <div class="engineering-page__badges-text">
                {!! $data->content2 !!}
            </div>
          </div>
          <div class="engineering-page__badges-item">
            <img
              class="engineering-page__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo3) }}"
            />
            <div class="engineering-page__badges-text">
                {!! $data->content3 !!}
            </div>
          </div>
          <div class="engineering-page__badges-item">
            <img
              class="engineering-page__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo4) }}"
            />
            <div class="engineering-page__badges-text">{!! $data->content4 !!}</div>

          </div>
          <div class="engineering-page__badges-item">
            <img
              class="engineering-page__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo5) }}"
            />
            <div class="engineering-page__badges-text">
                {!! $data->content5 !!}
            </div>
          </div>
          <div class="engineering-page__badges-item">
            <img
              class="engineering-page__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo6) }}"
            />
            <div class="engineering-page__badges-text">
                {!! $data->content6 !!}
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection

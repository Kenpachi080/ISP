@extends('const.main')
<!--intro  -->
@section('title')
    Главная
@endsection
@section('content')
    <section id="consulting-page__intro" class="consulting-page__intro">
      <div class="container">
        <div class="breadcrumbs consulting-page__breadcrumbs">
          <a href="/" class="breadcrumbs__link active">Главная</a>
          <span class="breadcrumbs__link">-</span>
          <p class="breadcrumbs__link">{{ $data->title }}</p>
        </div>
        <h2 class="page__title consulting-page__intro-title">
            {{ $data->title }}
        </h2>
          @php
              $src = $data->image;
              $url = str_replace('\\', '/', $src);
          @endphp
        <div
          class="consulting-page__intro-content"
          style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})"
        >
          <div class="consulting-page__intro-content__line"></div>
          <p class="consulting-page__intro-content__text">
              {{ $data->content }}
          </p>
        </div>
        <div class="consulting-page__intro__badges">
          <div class="consulting-page__intro__badges-item">
            <img
              class="consulting-page__intro__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo1) }}"
            />
            <div class="consulting-page__intro__badges-text">
              {!! $data->content1 !!}
            </div>
          </div>
          <div class="consulting-page__intro__badges-item">
            <img
              class="consulting-page__intro__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo2) }}"
            />
            <div class="consulting-page__intro__badges-text">
                {!! $data->content2 !!}
            </div>
          </div>
          <div class="consulting-page__intro__badges-item">
            <img
              class="consulting-page__intro__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo3) }}"
            />
            <div class="consulting-page__intro__badges-text">
                {!! $data->content3 !!}
            </div>
          </div>
          <div class="consulting-page__intro__badges-item">
            <img
              class="consulting-page__intro__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo4) }}"
            />
            <div class="consulting-page__intro__badges-text">
                {!! $data->content4 !!}
            </div>
          </div>
          <div class="consulting-page__intro__badges-item">
            <img
              class="consulting-page__intro__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo5) }}"
            />
            <div class="consulting-page__intro__badges-text">
                {!! $data->content5 !!}
            </div>
          </div>
          <div class="consulting-page__intro__badges-item">
            <img
              class="consulting-page__intro__badges-icon"
              src="{{ \Illuminate\Support\Facades\Storage::url($data->logo6) }}"
            />
            <div class="consulting-page__intro__badges-text">
                {!! $data->content6 !!}
            </div>
          </div>
        </div>
      </div>
    </section>

@endsection

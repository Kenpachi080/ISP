@extends('const.main')
<!--intro  -->
@section('title')
    Главная
@endsection
@section('content')
    @php
        $src = $main->image;
        $url = str_replace('\\', '/', $src);
    @endphp
    <section
        id="intro"
        class="intro"
        style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})"
    >
        <div class="container">
            <div class="intro__inner">
                <div class="intro__content">
                    <h1 class="intro__title home__title-white">{{ $main->title }}</h1>
                    <p class="intro__subtitle">
                        {{ $main->subtitle }}
                    </p>
                    <p class="intro__text">
                        {{ $main->text }}
                    </p>
                    <button class="button intro__button">Смотреть подробнее</button>
                </div>
                <button class="intro__arrow">
                    <img src="./images/icons/arrow-down.svg" alt="down"/>
                </button>
            </div>
        </div>
    </section>

    <!-- about -->
    @php
        $src = $about->image;
        $url = str_replace('\\', '/', $src);
    @endphp
    <section
        id="about"
        class="about"
        style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})"
    >
        <div class="container">
            <div class="about__content">
                <h3 class="about__title home__title">О компании</h3>
                <p class="about__text">
                    {{ $about->title }}
                </p>
                <p class="about__subtitle">{{ $about->subtitle }}</p>
                <p class="about__info">{{ $about->content }}
                </p>
                <a href="{{ route('about') }}" class="button about__button">Смотреть подробнее</a>
            </div>
        </div>
    </section>

    <!-- companies -->
    <section id="companies" class="companies">
        <div class="container">
            <div class="companies__slider">
                <button class="companies__btn companies__btn-prev">
                    <img src="./images/icons/slider-arrow-left.svg" alt=""/>
                </button>
                <div class="swiper companies__swiper">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper">
                        @foreach($partner as $block)
                            <div class="swiper-slide">
                                <img
                                    class="companies__slide-img"
                                    src="{{ \Illuminate\Support\Facades\Storage::url($block->partner)  }}"
                                    alt="company"
                                />
                            </div>
                        @endforeach
                    </div>
                </div>
                <button class="companies__btn companies__btn-next">
                    <img src="./images/icons/slider-arrow-right.svg" alt=""/>
                </button>
            </div>
        </div>
    </section>

    <!-- building -->
    <section
        id="building"
        class="building"
        style="background-image: url(./images/bg/building-bg.jpg)"
    >
        <div class="container">
            <div class="building__inner">
                <div class="building__content">
                    <h3 class="building__title home__title-white">{{ $design->title }}</h3>
                    <p class="building__subtitle">{{ $design->subtitle }}</p>
                    <div class="page__buttons building__buttons">
                        <button class="page__btn building__btn active" data-show=".building__basic">
                            Основное
                        </button>
                        <button class="page__btn building__btn" data-show=".building__additionally">
                            Дополнительно
                        </button>
                    </div>
                    <div class="building__info">
                        <div class="building__info-content building__basic active">
                            <div class="building__text"> {!! $design->main !!} </div>
                            <a href="{{ route('building') }}" class="button building__button"
                            >Смотреть подробнее</a
                            >
                        </div>

                        <div class="building__info-content building__additionally">
                            {!! $design->other !!}
                        </div>
                    </div>
                </div>
                <div class="building__projects">
                    <p class="building__projects-text">Наши реализованные проекты</p>
                    <div class="building__projects-gallery">
                        @php
                            $src = $buildingcard[0]->image;
                            $url = str_replace('\\', '/', $src);
                            $title = $buildingcard[0]->title;
                            $id = $buildingcard[0]->id;
                        @endphp
                        <div class="building__projects-item" style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})">
                            <div class="building__projects-content">
                                <p class="building__projects-title">{{ $title }}</p>
                                <a href="{{ route('singledesign', $id) }}">
                                    <img src="images/icons/arrow-rigth.svg" alt=""/>
                                </a>
                            </div>
                        </div>
                        @php
                            $src = $buildingcard[1]->image;
                            $url = str_replace('\\', '/', $src);
                            $title = $buildingcard[1]->title;
                            $id = $buildingcard[1]->id;
                        @endphp
                        <div class="building__projects-item" style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})">
                            <div class="building__projects-content">
                                <p class="building__projects-title">{{ $title }}</p>
                                <a href="{{ route('singledesign', $id) }}">
                                    <img src="images/icons/arrow-rigth.svg" alt=""/>
                                </a>
                            </div>
                        </div>
                        @php
                            $src = $buildingcard[2]->image;
                            $url = str_replace('\\', '/', $src);
                            $title = $buildingcard[2]->title;
                            $id = $buildingcard[2]->id;
                        @endphp
                        <div class="building__projects-item building__projects-middle" style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})">
                            <div class="building__projects-content">
                                <p class="building__projects-title">{{ $title }}</p>
                                <a href="{{ route('singledesign', $id) }}">
                                    <img src="images/icons/arrow-rigth.svg" alt=""/>
                                </a>
                            </div>
                        </div>
                        @php
                            $src = $buildingcard[3]->image;
                            $url = str_replace('\\', '/', $src);
                            $title = $buildingcard[3]->title;
                            $id = $buildingcard[3]->id;
                        @endphp
                        <div class="building__projects-item" style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})">
                            <div class="building__projects-content">
                                <p class="building__projects-title">
                                    {{ $title }}
                                </p>
                                <a href="{{ route('singledesign', $id) }}">
                                    <img src="images/icons/arrow-rigth.svg" alt=""/>
                                </a>
                            </div>
                        </div>
                        <div class="building__projects-item building__projects-last">
                            <div class="building__projects-content">
                                <p class="building__projects-title">
                                    Смотреть
                                    <span>больше проектов</span>
                                </p>
                                <a href="{{ route('design') }}">
                                    <img src="images/icons/arrow-rigth.svg" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- construction -->
    <section
        id="construction"
        class="construction"
        style="background-image: url(./images/bg/construction-bg.jpg)"
    >
        <div class="container">
            <h3 class="construction__title home__title-white">{{ $construction->title }}</h3>
            <p class="construction__subtitle">
                {{ $construction->subtitle }}
            </p>
            <div class="page__buttons construction__buttons">
                <button
                    class="page__btn construction__btn active"
                    data-show=".construction__slider"
                >
                    Основное
                </button>
                <button
                    class="page__btn construction__btn"
                    data-show=".construction__additionally"
                >
                    Дополнительно
                </button>
            </div>

            <div class="construction__content construction__slider active">
                <div class="container">
                    <div class="swiper construction__swiper">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            @foreach($constructioncard as $block)
                                <div class="swiper-slide">
                                    <div class="construction__slider-item">
                                        <div class="construction__slider-img">
                                            <img src="{{ \Illuminate\Support\Facades\Storage::url($block->image) }}" alt=""/>
                                        </div>
                                        <div class="construction__slider-content">
                                            <h6 class="construction__slider-title">
                                                {{$block->title}}
                                            </h6>
                                            <p class="construction__slider-text">Площадь объекта: 2 500 м2</p>
                                            <a
                                                class="construction__slider-button button"
                                                href="{{ route('building') }}"
                                            >
                                                Смотреть подробнее
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="construction__slider-bottom">
                        <button class="construction__slider-btn construction__slider-prev">
                            <img src="./images/icons/slider-arrow-left.svg" alt=""/>
                        </button>
                        <div class="construction__slider-pagination"></div>
                        <button class="construction__slider-btn construction__slider-next">
                            <img src="./images/icons/slider-arrow-right.svg" alt=""/>
                        </button>
                    </div>
                </div>
            </div>

            <div class="construction__content construction__additionally">
                {!! $construction->content !!}
                <a
                    href="{{ route('construction') }}"
                    class="button construction__additionally-btn"
                >
                    Смотреть подробнее
                </a>
            </div>
        </div>
    </section>

    <!-- consulting -->
    <section id="consulting" class="consulting">
        <div class="container">
            <p class="consulting__decor">PROJECT</p>
            <div class="consulting__content">
                <h3 class="consulting__title home__title">
                    {{ $consalting->title }}
                    <span>{{ $consalting->subtitle }}</span>
                </h3>
                <div class="consulting__info">
                    <div class="consulting__text"> {!!   $consalting->content !!} </div>
                </div>
                <a href="{{ route('consulting') }}" class="button consulting__btn"
                >Смотреть подробнее
                </a>
            </div>
            <img class="consulting__img" src="{{ \Illuminate\Support\Facades\Storage::url($consalting->image) }}"
                 alt=""/>
        </div>
    </section>

    <!-- engineering -->
    <section
        id="engineering"
        class="engineering"
        style="background-image: url(./images/bg/engineering-bg.jpg)"
    >
        <div class="container">
            <div class="engineering__title home__title">
                {!! $engineering->title !!}
            </div>
            <p class="engineering__text">
                {{ $engineering->subtitle }}
            </p>
            <div class="engineering__info">
                {!! $engineering->content !!}
            </div>
            <div class="engineering__inner">
                <div
                    class="engineering__services"
                    style="background-image: url(./images/bg/engineering-services-bg.jpg)"
                >
                    <h6 class="engineering__services-title">{{ $engineering->title1 }}</h6>
                    {!! $engineering->content1 !!}
                    <a class="engineering__services-btn" href="{{ route('engineering') }}">
                        Подробнее
                    </a>
                </div>
                <div class="engineering__item">
                    <h6 class="engineering__item-title">{{ $engineering->title2 }}</h6>
                    <p class="engineering__item-text">{{ $engineering->content2 }}</p>
                </div>
                <div class="engineering__img">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($engineering->image3) }}" alt=""/>
                </div>
                <div class="engineering__img">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($engineering->image4) }}" alt=""/>
                </div>
                <div class="engineering__item">
                    <h6 class="engineering__item-title">{{ $engineering->title5 }}</h6>
                    <p class="engineering__item-text">{!!  $engineering->content5 !!}</p>
                </div>
            </div>
                <div class="engineering__btn">
                    <a href="{{ route('engineering') }}" class="button">Смотреть подробнее</a>
                </div>

                <div class="engineering__content">
                    <p class="engineering__content-text engineering__content-bold">
                        {{ $engineering->footertitle }}
                    </p>
                    <p class="engineering__content-text">
                        {{ $engineering->footercontent }}</p>
                </div>
        </div>
        >Смотреть подробнее</a
    </section>
@endsection

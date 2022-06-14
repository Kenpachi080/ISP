@extends('const.main')
<!--intro  -->
@section('title')
    О компании
@endsection
@section('content')
    @php
        $src = $title->image;
        $url = str_replace('\\', '/', $src);
    @endphp
    <section id="about-page__intro" class="about-page__intro">
        <div class="container">
            <div class="breadcrumbs about-page__breadcrumbs">
                <a href="/" class="breadcrumbs__link active">Главная</a>
                <span class="breadcrumbs__link">-</span>
                <p class="breadcrumbs__link">О компании</p>
            </div>
            <h2 class="page__title about-page__intro-title">О компании</h2>
            <div
                class="about-page__intro-content"
                style="background-image: url({{ \Illuminate\Support\Facades\Storage::url($url) }})">
                <div class="about-page__intro-content__line"></div>
                <p class="about-page__intro-content__text">{{ $title->title  }}
                </p>
            </div>
        </div>
    </section>

    <!-- application -->
    <section id="about-page__application" class="about-page__application">
        <div class="container">
            <p class="about-page__application__decor">PROJECT</p>
            <div class="about-page__application__img">
                <img src="{{ \Illuminate\Support\Facades\Storage::url($about->image) }}"/>
            </div>
            <div class="about-page__application__content">
                <h3 class="about-page__title about-page__application__title">
                    TOO «IS PROJECT GROUP»
                </h3>
                <div class="about-page__application__badges">
                    <div class="about-page__application__badges-item">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($about->logo1) }}"/>
                        <p>{{ $about->title1 }}</p>
                    </div>
                    <div class="about-page__application__badges-item">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($about->logo2) }}"/>
                        <p>{{ $about->title2 }}</p>
                    </div>
                    <div class="about-page__application__badges-item">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($about->logo3) }}"/>
                        <p>{{ $about->title3 }}</p>
                    </div>
                </div>
                <button class="button about-page__application__btn">Оставить заявку</button>
            </div>
        </div>
    </section>

    <!-- advantages -->
    <section id="about-page__advantages" class="about-page__advantages">
        <div class="container">
            <h3 class="about-page__title about-page__advantages__title">Наши преимущества</h3>
            <div class="about-page__advantages__content">
                <div
                    class="about-page__advantages__card-item"
                    style="background-image: url(../images/about/about-bg-block.png)"
                >
                    <div class="about-page__img-wrapper">
                        <img class="about-page__advantages__card-icon" src="{{ \Illuminate\Support\Facades\Storage::url($advantage->image1) }}"/>
                    </div>

                    <h5 class="about-page__advantages__card-title">{{ $advantage->title1 }}</h5>
                    <p class="about-page__advantages__card-text">
                        {{ $advantage->text1 }}
                    </p>
                </div>
                <div
                    class="about-page__advantages__card-item"
                    style="background-image: url(../images/about/about-bg-block.png)"
                >
                    <div class="about-page__img-wrapper">
                        <img class="about-page__advantages__card-icon" src="{{ \Illuminate\Support\Facades\Storage::url($advantage->image2) }}"/>
                    </div>

                    <h5 class="about-page__advantages__card-title">{{ $advantage->title2 }}</h5>
                    <p class="about-page__advantages__card-text">
                        {{ $advantage->text2 }}
                    </p>
                </div>
                <div
                    class="about-page__advantages__card-item"
                    style="background-image: url(../images/about/about-bg-block.png)"
                >
                    <div class="about-page__img-wrapper">
                        <img class="about-page__advantages__card-icon" src="{{ \Illuminate\Support\Facades\Storage::url($advantage->image3) }}"/>
                    </div>


                    <h5 class="about-page__advantages__card-title">{{ $advantage->title3 }}</h5>
                    <p class="about-page__advantages__card-text">{{ $advantage->text3 }}
                    </p>
                </div>
                <div
                    class="about-page__advantages__card-item"
                    style="background-image: url(../images/about/about-bg-block.png)"
                >
                    <div class="about-page__img-wrapper">
                        <img class="about-page__advantages__card-icon" src="{{ \Illuminate\Support\Facades\Storage::url($advantage->image4) }}"/>
                    </div>
                    <h5 class="about-page__advantages__card-title">{{ $advantage->title4 }}</h5>
                    <p class="about-page__advantages__card-text">
                        {{ $advantage->text4 }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- letters -->
    <section id="about-page__letters" class="about-page__letters">
        <div class="container">
            <h3 class="about-page__title about-page__letters__title">
                Рекомендательные письма
            </h3>
            <div class="about-page__letters__top">
                <div class="about-page__letters__top-item">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($mail->image1) }}"/>
                </div>
                <div class="about-page__letters__top-item">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($mail->image2) }}"/>
                </div>
                <div class="about-page__letters__top-item">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($mail->image3) }}"/>
                </div>
                <div class="about-page__letters__top-item">
                    <img src="{{ \Illuminate\Support\Facades\Storage::url($mail->image4) }}"/>
                </div>
            </div>
            <div class="about-page__letters__bottom">
                <div class="about-page__letters__info">
                    <div class="about-page__letters__info-icon">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($mail->logo1) }}"/>
                    </div>
                    <p class="about-page__letters__info-text">{{ $mail->text1 }}</p>
                </div>
                <div class="about-page__letters__info-dots">
                    <img src="../images/about/about-bg-dot.svg"/>
                </div>
                <div class="about-page__letters__info">
                    <div class="about-page__letters__info-icon">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($mail->logo2) }}"/>
                    </div>
                    <p class="about-page__letters__info-text">{{ $mail->text2 }}</p>
                </div>
                <div class="about-page__letters__info-dots">
                    <img src="../images/about/about-bg-dot.svg"/>
                </div>
                <div class="about-page__letters__info">
                    <div class="about-page__letters__info-icon">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($mail->logo3) }}"/>
                    </div>
                    <p class="about-page__letters__info-text">
                        {{ $mail->text3 }}
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- partners -->
    <section id="about-page__partners" class="about-page__partners">
        <div class="container">
            <h3 class="about-page__title about-page__partners__title">
                Среди наших клиентов и партнёров – известные бренды
            </h3>
            <div class="about-page__partners__content">
                @foreach($partner as $block)
                    <div class="about-page__partners__content-item">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($block->partner) }}"/>
                    </div>
                @endforeach
            </div>
            <p class="about-page__partners__bottom-text">И многие другие...</p>
        </div>
    </section>

    <!-- licenses  -->
    <section id="about-page__licenses" class="about-page__licenses">
        <div class="container">
            <h3 class="about-page__title about-page__licenses__title">
                Лицензии и свидетельства
            </h3>
            <div class="about-page__licenses__content">
                @foreach($license as $block)
                    <div class="about-page__licenses__content-item">
                        <img src="{{ \Illuminate\Support\Facades\Storage::url($block->image) }}"/>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection

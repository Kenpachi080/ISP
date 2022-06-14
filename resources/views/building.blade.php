@extends('const.main')
<!--intro  -->
@section('title')
    Главная
@endsection
@section('content')
    <section id="about-page__intro" class="about-page__intro">
        <div class="container">
            <div class="breadcrumbs about-page__breadcrumbs">
                <a href="/" class="breadcrumbs__link active">Главная</a>
                <span class="breadcrumbs__link">-</span>
                <p class="breadcrumbs__link">Строительство</p>
            </div>
            <h2 class="page__title about-page__intro-title">Строительство</h2>

            <!-- building page -->
            <div class="design-page">
                <div class="design-page__grid">
                    <?php
                    $i = 0;
                    ?>
                    @foreach($data as $block)
                        <?php
                        $i++;
                        $src = $block->image;
                        $url = str_replace('\\', '/', $src);
                        if ($i < 4) {?>
                        <div
                            style="background: url('{{ \Illuminate\Support\Facades\Storage::url($url) }}') center center/cover no-repeat;"
                            class="design-page__img box-{{$i}}">
                            <a href="{{ route('singlebuild', $block->id) }}" class="hidden-link"></a>
                            <div class="design-page__inner">
                                <a href="{{ route('singlebuild', $block->id) }}"
                                   class="design-page__link">Строительство</a>
                                <span class="design-page__title">{{ $block->title }}</span>
                                <a href="{{ route('singlebuild', $block->id) }}" class="design-page__btn">
                                    <img src="../images/icons/arrow-rigth.svg" alt="icon">
                                </a>
                            </div>
                        </div>
                        <?php } else if ($i == 4) {?>
                        <div
                            style="background: url('{{ \Illuminate\Support\Facades\Storage::url($url) }}') center center/cover no-repeat;"
                            class="design-page__img box-{{$i}}">
                            <a href="{{ route('singlebuild', $block->id) }}" class="hidden-link"></a>
                            <div class="design-page__inner">
                                <a href="{{ route('singlebuild', $block->id) }}"
                                   class="design-page__link">Строительство</a>
                                <span class="design-page__title">{{ $block->title }}</span>
                                <a href="{{ route('singlebuild', $block->id) }}" class="design-page__btn">
                                    <img src="../images/icons/arrow-rigth.svg" alt="icon">
                                </a>
                            </div>
                        </div>
                </div>
                <?php  } else if ($i > 4) {?>
                <div
                    style="background: url('{{ \Illuminate\Support\Facades\Storage::url($url) }}') center center/cover no-repeat;"
                    class="design-page__img flex">
                    <div class="design-page__inner">
                        <a href="{{ route('singlebuild', $block->id) }}"
                           class="design-page__link-trans">Строительство</a>
                        <span class="design-page__title">{{ $block->title }}</span>
                        <a href="{{ route('singlebuild', $block->id) }}" class="design-page__btn">
                            <img src="../images/icons/arrow-rigth.svg" alt="icon">
                        </a>
                    </div>
                </div>
                <?php }
                ?>
                @endforeach
            </div>
        </div>
    </section>
@endsection

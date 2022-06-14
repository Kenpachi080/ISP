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
                <p class="breadcrumbs__link">{{ $title }}</p>
            </div>
            <h2 class="page__title about-page__intro-title">{{ $title }}</h2>

            <div class="design-page__main-img">
                <img style="margin: auto" src="{{ \Illuminate\Support\Facades\Storage::url($data->image) }}"
                     alt="image">
            </div>

            <div class="design-link">
                <a href="#">{{ $title }}</a>
            </div>
            <h2 class="design-page-inner__title">{{ $data->title }} </h2>

            <div class="design-page-slider swiper">
                <div class="swiper-wrapper">
                    <?php
                    $images = json_decode($data->images);
                    function storage($img) {
                        return \Illuminate\Support\Facades\Storage::url($img);
                    }
                    $i = 1;
                    $html = '';
                    foreach ($images as $key=>$value) {
                        if ($i == 1) {
                            $html .= '<div class="design-page-inner swiper-slide">';
                            $html .= '<div class="design-page-inner__img box-' . $i . '">
                            <img src="'.storage($value).'" alt="image"></div>';
                            $i++;
                    } else if ($i == 4) {
                            $html .= '<div class="design-page-inner__img box-' . $i . '">
                            <img src="'.storage($value).'" alt="image"></div>';
                            $html .= '</div>';
                            $i = 1;
                        } else {
                            $html .= '<div class="design-page-inner__img box-' . $i . '">
                            <img src="'.storage($value).'" alt="image"></div>';
                            $i++;
                        }
                    }
                    echo $html;
                    ?>
                </div>
            </div>

            <div class="design-page-slider__nav">
                <button class="design-page-slider__next">
                    <img src="../images/icons/slider-arrow-left.svg" alt="icon"/>
                </button>
                <div class="design-page-slider__pagination"></div>
                <button class="design-page-slider__prev">
                    <img src="../images/icons/slider-arrow-right.svg" alt="icon"/>
                </button>
            </div>

        </div>
    </section>

    <div class="container">
        <div class="social-links">
            <div class="social-links__title">Поделиться в соц. сетях</div>
            <div class="social-links__links">
                <a href="#" class="social-links__item">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M31.9695 16.2971L28.6913 30.2481C28.537 30.9052 27.8235 31.2437 27.2385 30.9317L23.0924 28.7216L21.1318 32.0334C20.5984 32.9361 19.2486 32.5446 19.2486 31.4891V27.7989C19.2486 27.5136 19.3642 27.2415 19.5635 27.0423L27.6435 19.0779C27.6371 18.9784 27.5342 18.8922 27.4315 18.965L17.7896 25.8941L14.55 24.1685C13.7916 23.7636 13.8237 22.6286 14.6078 22.2769L30.5813 15.0892C31.3462 14.744 32.1691 15.4543 31.9698 16.2971L31.9695 16.2971Z"
                            fill="black"/>
                        <circle cx="23" cy="23" r="22" stroke="black" stroke-width="2"/>
                    </svg>
                </a>
                <a href="#" class="social-links__item">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M17.182 15H29.818C31.018 15 31.9998 15.8884 31.9998 17.1818V29.8182C31.9998 31.1116 31.018 32 29.818 32H17.182C15.9817 32 15 31.1116 15 29.8182V17.1818C15 15.8884 15.9817 15 17.182 15ZM27.3838 16.8888C26.9627 16.8888 26.6187 17.233 26.6187 17.6542V19.486C26.6187 19.907 26.9627 20.2514 27.3838 20.2514H29.3052C29.7262 20.2514 30.0706 19.907 30.0706 19.486V17.6542C30.0706 17.233 29.7262 16.8888 29.3052 16.8888H27.3838ZM30.0786 22.1892H28.5824C28.7239 22.6514 28.8006 23.141 28.8006 23.6476C28.8006 26.4752 26.4344 28.7674 23.5161 28.7674C20.5981 28.7674 18.2323 26.4752 18.2323 23.6476C18.2323 23.1407 18.3087 22.6513 18.4504 22.1892H16.8891V29.3703C16.8891 29.7419 17.1932 30.0461 17.565 30.0461H29.4031C29.7749 30.0461 30.0789 29.7421 30.0789 29.3703V22.1892H30.0786ZM23.516 20.1549C21.6305 20.1549 20.1018 21.6359 20.1018 23.4631C20.1018 25.2902 21.6305 26.7713 23.516 26.7713C25.4016 26.7713 26.9305 25.2902 26.9305 23.4631C26.9305 21.6359 25.4018 20.1549 23.516 20.1549Z"
                            fill="black"/>
                        <circle cx="23" cy="23" r="22" stroke="black" stroke-width="2"/>
                    </svg>
                </a>
                <a href="#" class="social-links__item">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M23.0022 14H22.9978C18.0354 14 14 18.0365 14 23C14 24.9688 14.6345 26.7935 15.7134 28.2751L14.5918 31.6186L18.0511 30.5128C19.4742 31.4555 21.1719 32 23.0022 32C27.9646 32 32 27.9624 32 23C32 18.0376 27.9646 14 23.0022 14ZM28.2391 26.7091C28.022 27.3223 27.1602 27.8307 26.4729 27.9792C26.0026 28.0794 25.3884 28.1593 23.3206 27.302C20.6757 26.2063 18.9725 23.5186 18.8398 23.3442C18.7126 23.1699 17.771 21.9211 17.771 20.6296C17.771 19.3381 18.4269 18.7092 18.6912 18.4392C18.9084 18.2176 19.2673 18.1164 19.6115 18.1164C19.7229 18.1164 19.823 18.122 19.913 18.1265C20.1774 18.1378 20.3101 18.1535 20.4845 18.5709C20.7016 19.094 21.2304 20.3855 21.2934 20.5182C21.3575 20.651 21.4216 20.831 21.3316 21.0054C21.2473 21.1854 21.173 21.2652 21.0402 21.4183C20.9075 21.5712 20.7815 21.6883 20.6487 21.8525C20.5272 21.9954 20.39 22.1484 20.543 22.4128C20.696 22.6715 21.2248 23.5344 22.0033 24.2274C23.0079 25.1217 23.8224 25.4075 24.1137 25.529C24.3309 25.619 24.5896 25.5976 24.7483 25.4289C24.9496 25.2118 25.1982 24.8518 25.4514 24.4974C25.6314 24.2431 25.8586 24.2116 26.0971 24.3016C26.3401 24.386 27.626 25.0216 27.8904 25.1532C28.1547 25.286 28.3291 25.349 28.3932 25.4604C28.4562 25.5718 28.4562 26.0949 28.2391 26.7091Z"
                            fill="black"/>
                        <circle cx="23" cy="23" r="22" stroke="black" stroke-width="2"/>
                    </svg>
                </a>
                <a href="#" class="social-links__item">
                    <svg width="46" height="46" viewBox="0 0 46 46" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M27.4989 14.0037L25.1648 14C22.5424 14 20.8477 15.7387 20.8477 18.4298V20.4723H18.5008C18.298 20.4723 18.1338 20.6367 18.1338 20.8395V23.7988C18.1338 24.0016 18.2982 24.1658 18.5008 24.1658H20.8477V31.633C20.8477 31.8358 21.0119 32 21.2147 32H24.2768C24.4796 32 24.6438 31.8356 24.6438 31.633V24.1658H27.3879C27.5907 24.1658 27.7549 24.0016 27.7549 23.7988L27.756 20.8395C27.756 20.7421 27.7173 20.6489 27.6486 20.5799C27.5798 20.511 27.4862 20.4723 27.3888 20.4723H24.6438V18.7409C24.6438 17.9087 24.8421 17.4862 25.9262 17.4862L27.4986 17.4857C27.7012 17.4857 27.8654 17.3212 27.8654 17.1186V14.3708C27.8654 14.1683 27.7014 14.0041 27.4989 14.0037Z"
                            fill="black"/>
                        <circle cx="23" cy="23" r="22" stroke="black" stroke-width="2"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
@endsection

@extends('website.layouts.app')

@section('title','News')

@section('content')
<section class="aci__banner-section">
    <style  >
        #banner-bg- {
            background-image: url('/assets/images/blog.png');
        }
    </style>
    <div id="banner-bg-" class="aci__banner-bg"></div>
    <div class="act__banner-overlay"></div>
    <div class="container">
        <div class="banner-content">
            <h1>Latest News &amp; Media</h1>
            <p></p>
        </div>
    </div><!-- end container -->
</section><!-- end banner -->

<section class="aci__breadcrumb bg-white">
    <div class="container">
        <ul class="aci__breadcrumb-list">
            <li><a href="/">Home </a><span>/</span></li>
            <li>News And Media</li>
        </ul>
    </div>
</section>


<section class="news-slider">
    <div class="container">
        <div class="news-slider-wrapper">

        @foreach($news as $item)
            <div class="news-slider-item">
                <div class="news-slider-item-inner">
                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}" />
                    <div class="news-slider-content">
                        <ul>
                            <li><a style="text-transform: capitalize;">{{ $item->choose_type }}</a></li>
                            <li>{{ $item->post_date }}</li>
                        </ul>
                        <h3>{{ $item->title }}</h3>
                        <p>
                            {{ $item->short_description }}
                        </p>
                        <a href="{{ route('news.single',$item->slug) }}" class="btn-transparent">
                            Read More
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_1539_24662)">
                                    <path d="M8 14L12 10L8 6" stroke="#270110" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_1539_24662">
                                        <rect width="20" height="20" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach


        </div>
    </div>
</section>

@endsection
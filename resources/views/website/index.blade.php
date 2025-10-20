@extends('website.layouts.app')

@section('title','Home')
@section('content')


    <section class="hero-slider-wrapper">

        <a class="hero-sticky-btn" href="#home-about">
            <svg width="48" height="157" viewBox="0 0 48 157" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M21.9545 83.1705C21.5227 83.2216 21.1875 83.429 20.9489 83.7926C20.7102 84.1562 20.5909 84.6023 20.5909 85.1307C20.5909 85.517 20.6534 85.8551 20.7784 86.1449C20.9034 86.4318 21.0753 86.6562 21.294 86.8182C21.5128 86.9773 21.7614 87.0568 22.0398 87.0568C22.2727 87.0568 22.473 87.0014 22.6406 86.8906C22.8054 86.777 22.9432 86.6321 23.054 86.456C23.1619 86.2798 23.2514 86.0952 23.3224 85.902C23.3906 85.7088 23.446 85.5312 23.4886 85.3693L23.7273 84.483C23.7869 84.2557 23.8693 84.0028 23.9744 83.7244C24.0795 83.4432 24.223 83.1747 24.4048 82.919C24.5838 82.6605 24.8139 82.4474 25.0952 82.2798C25.3764 82.1122 25.7216 82.0284 26.1307 82.0284C26.6023 82.0284 27.0284 82.152 27.4091 82.3991C27.7898 82.6435 28.0923 83.0014 28.3168 83.473C28.5412 83.9418 28.6534 84.5114 28.6534 85.1818C28.6534 85.8068 28.5526 86.348 28.3509 86.8054C28.1491 87.2599 27.8679 87.6179 27.5071 87.8793C27.1463 88.1378 26.7273 88.2841 26.25 88.3182V87.2273C26.5795 87.1989 26.8523 87.0881 27.0682 86.8949C27.2812 86.6989 27.4403 86.4517 27.5455 86.1534C27.6477 85.8523 27.6989 85.5284 27.6989 85.1818C27.6989 84.7784 27.6335 84.4162 27.5028 84.0952C27.3693 83.7741 27.1847 83.5199 26.9489 83.3324C26.7102 83.1449 26.4318 83.0511 26.1136 83.0511C25.8239 83.0511 25.5881 83.1321 25.4062 83.294C25.2244 83.456 25.0767 83.669 24.9631 83.9332C24.8494 84.1974 24.75 84.483 24.6648 84.7898L24.358 85.8636C24.1619 86.5455 23.8821 87.0852 23.5185 87.483C23.1548 87.8807 22.679 88.0795 22.0909 88.0795C21.6023 88.0795 21.1761 87.9474 20.8125 87.6832C20.446 87.4162 20.1619 87.0582 19.9602 86.6094C19.7557 86.1577 19.6534 85.6534 19.6534 85.0966C19.6534 84.5341 19.7543 84.0341 19.956 83.5966C20.1548 83.1591 20.4276 82.8125 20.7741 82.5568C21.1207 82.2983 21.5142 82.1619 21.9545 82.1477V83.1705ZM22.5 73.2681V74.3249C22.196 74.3874 21.929 74.4968 21.6989 74.6531C21.4688 74.8065 21.2756 74.994 21.1193 75.2156C20.9602 75.4343 20.8409 75.6772 20.7614 75.9442C20.6818 76.2113 20.642 76.4897 20.642 76.7795C20.642 77.3079 20.7756 77.7866 21.0426 78.2156C21.3097 78.6417 21.7031 78.9812 22.223 79.234C22.7429 79.484 23.3807 79.609 24.1364 79.609C24.892 79.609 25.5298 79.484 26.0497 79.234C26.5696 78.9812 26.9631 78.6417 27.2301 78.2156C27.4972 77.7866 27.6307 77.3079 27.6307 76.7795C27.6307 76.4897 27.5909 76.2113 27.5114 75.9442C27.4318 75.6772 27.3139 75.4343 27.1577 75.2156C26.9986 74.994 26.804 74.8065 26.5739 74.6531C26.3409 74.4968 26.0739 74.3874 25.7727 74.3249V73.2681C26.2187 73.3477 26.6179 73.4925 26.9702 73.7028C27.3224 73.913 27.6222 74.1744 27.8693 74.4869C28.1136 74.7994 28.2997 75.1502 28.4276 75.5394C28.5554 75.9258 28.6193 76.3391 28.6193 76.7795C28.6193 77.5238 28.4375 78.1857 28.0739 78.7653C27.7102 79.3448 27.1932 79.8008 26.5227 80.1332C25.8523 80.4656 25.0568 80.6317 24.1364 80.6317C23.2159 80.6317 22.4205 80.4656 21.75 80.1332C21.0795 79.8008 20.5625 79.3448 20.1989 78.7653C19.8352 78.1857 19.6534 77.5238 19.6534 76.7795C19.6534 76.3391 19.7173 75.9258 19.8452 75.5394C19.973 75.1502 20.1605 74.7994 20.4077 74.4869C20.652 74.1744 20.9503 73.913 21.3026 73.7028C21.652 73.4925 22.0511 73.3477 22.5 73.2681ZM28.5 71.5604H19.7727V68.6115C19.7727 67.9297 19.8892 67.37 20.1222 66.9325C20.3523 66.495 20.669 66.1712 21.0724 65.9609C21.4759 65.7507 21.9347 65.6456 22.4489 65.6456C22.9631 65.6456 23.419 65.7507 23.8168 65.9609C24.2145 66.1712 24.527 66.4936 24.7543 66.9283C24.9787 67.3629 25.0909 67.9183 25.0909 68.5945V70.9808H24.1364V68.6286C24.1364 68.1626 24.0682 67.7876 23.9318 67.5036C23.7955 67.2166 23.6023 67.0092 23.3523 66.8814C23.0994 66.7507 22.7983 66.6854 22.4489 66.6854C22.0994 66.6854 21.794 66.7507 21.5327 66.8814C21.2713 67.0121 21.0696 67.2209 20.9276 67.5078C20.7827 67.7947 20.7102 68.174 20.7102 68.6456V70.5036H28.5V71.5604ZM24.5795 67.4524L28.5 65.3047V66.532L24.5795 68.6456V67.4524ZM24.1364 56.521C25.0568 56.521 25.8523 56.6871 26.5227 57.0195C27.1932 57.3519 27.7102 57.8079 28.0739 58.3874C28.4375 58.967 28.6193 59.6289 28.6193 60.3732C28.6193 61.1175 28.4375 61.7795 28.0739 62.359C27.7102 62.9386 27.1932 63.3945 26.5227 63.7269C25.8523 64.0593 25.0568 64.2255 24.1364 64.2255C23.2159 64.2255 22.4205 64.0593 21.75 63.7269C21.0795 63.3945 20.5625 62.9386 20.1989 62.359C19.8352 61.7795 19.6534 61.1175 19.6534 60.3732C19.6534 59.6289 19.8352 58.967 20.1989 58.3874C20.5625 57.8079 21.0795 57.3519 21.75 57.0195C22.4205 56.6871 23.2159 56.521 24.1364 56.521ZM24.1364 57.5437C23.3807 57.5437 22.7429 57.6701 22.223 57.9229C21.7031 58.1729 21.3097 58.5124 21.0426 58.9414C20.7756 59.3675 20.642 59.8448 20.642 60.3732C20.642 60.9016 20.7756 61.3803 21.0426 61.8093C21.3097 62.2354 21.7031 62.5749 22.223 62.8278C22.7429 63.0778 23.3807 63.2028 24.1364 63.2028C24.892 63.2028 25.5298 63.0778 26.0497 62.8278C26.5696 62.5749 26.9631 62.2354 27.2301 61.8093C27.4972 61.3803 27.6307 60.9016 27.6307 60.3732C27.6307 59.8448 27.4972 59.3675 27.2301 58.9414C26.9631 58.5124 26.5696 58.1729 26.0497 57.9229C25.5298 57.6701 24.892 57.5437 24.1364 57.5437ZM28.5 54.744H19.7727V53.6871H27.5625V49.6303H28.5V54.744ZM28.5 47.994H19.7727V46.9371H27.5625L27.5625 42.8803H28.5L28.5 47.994ZM28.5 35.1758V37.869H19.7727V35.0565C19.7727 34.2099 19.9474 33.4854 20.2969 32.8832C20.6435 32.2809 21.142 31.8192 21.7926 31.4982C22.4403 31.1772 23.2159 31.0167 24.1193 31.0167C25.0284 31.0167 25.8111 31.1786 26.4673 31.5025C27.1207 31.8263 27.6236 32.2979 27.9759 32.9173C28.3253 33.5366 28.5 34.2894 28.5 35.1758ZM27.5625 36.8121V35.244C27.5625 34.5224 27.4233 33.9244 27.1449 33.4499C26.8665 32.9755 26.4702 32.6218 25.956 32.3888C25.4418 32.1559 24.8295 32.0394 24.1193 32.0394C23.4148 32.0394 22.8082 32.1545 22.2997 32.3846C21.7884 32.6147 21.3963 32.9585 21.1236 33.4158C20.848 33.8732 20.7102 34.4428 20.7102 35.1246V36.8121H27.5625ZM24.1364 21.8803C25.0568 21.8803 25.8523 22.0465 26.5227 22.3789C27.1932 22.7113 27.7102 23.1673 28.0739 23.7468C28.4375 24.3263 28.6193 24.9883 28.6193 25.7326C28.6193 26.4769 28.4375 27.1388 28.0739 27.7184C27.7102 28.2979 27.1932 28.7539 26.5227 29.0863C25.8523 29.4187 25.0568 29.5849 24.1364 29.5849C23.2159 29.5849 22.4205 29.4187 21.75 29.0863C21.0795 28.7539 20.5625 28.2979 20.1989 27.7184C19.8352 27.1388 19.6534 26.4769 19.6534 25.7326C19.6534 24.9883 19.8352 24.3263 20.1989 23.7468C20.5625 23.1673 21.0795 22.7113 21.75 22.3789C22.4205 22.0465 23.2159 21.8803 24.1364 21.8803ZM24.1364 22.9031C23.3807 22.9031 22.7429 23.0295 22.223 23.2823C21.7031 23.5323 21.3097 23.8718 21.0426 24.3008C20.7756 24.7269 20.642 25.2042 20.642 25.7326C20.642 26.261 20.7756 26.7397 21.0426 27.1687C21.3097 27.5948 21.7031 27.9343 22.223 28.1871C22.7429 28.4371 23.3807 28.5621 24.1364 28.5621C24.892 28.5621 25.5298 28.4371 26.0497 28.1871C26.5696 27.9343 26.9631 27.5948 27.2301 27.1687C27.4972 26.7397 27.6307 26.261 27.6307 25.7326C27.6307 25.2042 27.4972 24.7269 27.2301 24.3008C26.9631 23.8718 26.5696 23.5323 26.0497 23.2823C25.5298 23.0295 24.892 22.9031 24.1364 22.9031ZM28.5 18.5181L19.7727 20.9045V19.8306L26.8807 18.0067V17.9215L19.7727 16.0636V14.8704L26.8807 13.0124V12.9272L19.7727 11.1033V10.0295L28.5 12.4158V13.5067L21.5455 15.4329V15.5011L28.5 17.4272V18.5181ZM19.7727 1.79226H28.5V2.81499L21.6477 7.57067V7.65589H28.5V8.71271H19.7727V7.68999L26.642 2.91726V2.83203H19.7727V1.79226Z"
                    fill="white" />
                <rect x="0.5" y="109.5" width="47" height="47" rx="23.5" stroke="white" />
                <path
                    d="M23.2929 142.707C23.6834 143.098 24.3166 143.098 24.7071 142.707L31.0711 136.343C31.4616 135.953 31.4616 135.319 31.0711 134.929C30.6805 134.538 30.0474 134.538 29.6569 134.929L24 140.586L18.3431 134.929C17.9526 134.538 17.3195 134.538 16.9289 134.929C16.5384 135.319 16.5384 135.953 16.9289 136.343L23.2929 142.707ZM23 124L23 142L25 142L25 124L23 124Z"
                    fill="white" />
            </svg>
        </a>

        <div class="hero-slider">
             @foreach($hero as $item)
            <div class="hero-image">
                <video autoplay muted loop id="myVideo" class="video-bg">
                    <source src="{{Storage::url($item->video)}}" type="video/mp4">
                </video>

                <div class="container">
                    <div class="hero-content">
                       
                        <div class="hero-content-inner">
                            <h1 data-animation-in="slideInUp" data-duration-in="1">{{$item->title}}</h1>
                            <div class="btn-group">
                                <a class="btn-primary" data-animation-in="slideInUp" data-duration-in="1"
                                    data-delay-in=".4" href="{{$item->product_link}}">
                                    View Products
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_346_121)">
                                            <path d="M8 14L12 10L8 6" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_346_121">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <a class="btn-transparent" data-animation-in="slideInUp" data-duration-in="1"
                                    data-delay-in=".4" href="{{$item->learn_more_link}}">
                                    Learn More
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_346_121)">
                                            <path d="M8 14L12 10L8 6" stroke="white" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_346_121">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                            </div>
                        </div>
                       
                    </div>
                </div>
               
            </div>
              @endforeach
        </div>
    </section>

    <!-- home about -->
    <section class="home-about" id="home-about">
        <div class="container">
            <div class="home-about-wrapper">

                <div class="home-about-thumbnail">
                    <img src="{{Storage::url($about->image_1)}}" class="image-01" alt="{{$about->title}}">
                    <img src="{{Storage::url($about->image_2)}}" class="image-02" alt="{{$about->title}}">
                    <div class="home-counter-item">
                        <img src="{{Storage::url($about->logo)}}" alt="{{$about->title}}">
                        <div class="home-counter-inner">
                            <span class="counter">{{ $about->experience }}</span>
                            <span class="counter-title">Years of Experience</span>
                        </div>

                        <div class="ring"></div>
                    </div>
                </div>

                <div class="home-about-content">
                    <div class="home-about-content-top">
                        <svg width="12" height="24" viewBox="0 0 12 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M11.6731 12.4155C5.26887 12.4241 0.0713166 17.5817 0 23.9702C6.40423 23.9617 11.5989 18.804 11.6731 12.4155Z"
                                fill="#B81556" />
                            <path
                                d="M0 0.0297117C0.00855799 6.43394 5.16617 11.6303 11.5533 11.7034C11.5447 5.29943 6.38711 0.103025 0 0.0297117Z"
                                fill="#7ECD50" />
                        </svg>
                        <div class="top-title">{{ $about->about_company }}</div>
                        <span class="line"></span>
                    </div>
                    <h2>{{$about->title}}</h2>
                    <p>{{$about->description}}</p>
                    <a href="/overview" class="btn-transparent">
                        Learn More
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_349_2707)">
                                <path d="M8 14L12 10L8 6" stroke="#B81556" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_349_2707">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>

            </div>
        </div><!-- end container -->
    </section><!-- end home about -->



    <section class="aci-promo-section ">
        <div class="container">
            <div class="aci-promo-wrapper">
                @foreach($counters as $item)
                <div class="aci-promo-item wow slideInUp" data-wow-delay=".2s" data-wow-duration="1s">
                    <div class="promo-icon">
                        <img src="{{ Storage::url($item->icon) }}" alt="{{$item->name}}" />
                    </div>
                    <div class="promo-icon-content">
                        <div class="icon-title">{{$item->counter}}+</div>
                        <div class="icon-des">{{$item->name}}</div>
                    </div>
                </div>
                @endforeach
                
                <!-- end aci-promo-item -->
            </div>
        </div>
        <!-- end container -->
    </section>





    <section class="agrovet-products">

        <div class="agrovet-products-bg" style="background: url( '/storage/photos/shares/home/products-bg.jpg' );"></div>
        <div class="agrovet-products-bg-overlay"></div>

        <div class="container">

            <div class="section-head">
                <div class="section-title">Booster Products</div>
                <div class="section-des">We started our business with a slogan of “Nourishing Lives, Building The
                    Nation”. In an elaborative vison, we feed the nation by providing the best quality cattle,
                    poultry and aqua feed which ensure the country’s protein intake and helps the nation to become a
                    self-sufficient country in agricultural food production.
                </div>
            </div><!-- end section-head -->

            <div class="agrovet-products-inner">

            @foreach($categories as $category)
                <div class="agrovet-products-card ">
                    <img src="{{ Storage::url($category->image) }}" alt="{{ $category->name }}">
                    <h4>{{ $category->name }}</h4>
                    <ul>
                        @foreach($category->subcategories as $item)
                        <li>
                            <a href="#">
                                {{ $item->name }}
                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="white"
                                        stroke-opacity="0.1" />
                                    <g clip-path="url(#clip0_365_100)">
                                        <path d="M14 20L18 16L14 12" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_365_100">
                                            <rect width="20" height="20" fill="white" transform="translate(6 6)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </li>
                        @endforeach
                        
                    </ul>
                    <a href="#" class="btn-outline">
                        View All
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_365_44)">
                                <path d="M8 14L12 10L8 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_365_44">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            @endforeach
                



            </div>

        </div>
        
        
        <!-- end container -->


    </section><!-- end aci-promo-section -->



    <section class="agricultural-excellence">
        <div class="container">

            <div class="section-head-left">
                <div class="home-about-content-top wow slideInUp" data-wow-delay=".4s" data-wow-duration="1s">
                    <svg width="12" height="24" viewBox="0 0 12 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M11.6731 12.4155C5.26887 12.4241 0.0713166 17.5817 0 23.9702C6.40423 23.9617 11.5989 18.804 11.6731 12.4155Z"
                            fill="#B81556"></path>
                        <path
                            d="M0 0.0297117C0.00855799 6.43394 5.16617 11.6303 11.5533 11.7034C11.5447 5.29943 6.38711 0.103025 0 0.0297117Z"
                            fill="#7ECD50"></path>
                    </svg>
                    <div class="top-title wow slideInUp" data-wow-delay=".4s" data-wow-duration="1s">Services
                    </div>
                    <span class="line wow slideInUp" data-wow-delay=".4s" data-wow-duration="1s"></span>
                </div>
                <h2 class="wow slideInUp" data-wow-delay=".8s" data-wow-duration="1s">Empowering Farmers, Enriching
                    the Nation.
                </h2>
            </div><!-- end aci-promo-section -->

            <div class="agricultural-excellence-wrapper">

            @foreach($services as $item)
                <div class="agricultural-excellence-item wow slideInUp" data-wow-delay=".8s" data-wow-duration="1s">
                    <img src="{{ Storage::url($item->icon) }}"
                        alt="{{ $item->name }}">
                    <div class="agri-title">{{ $item->name }}</div>
                    <div class="agri-des">{{ $item->description }}</div>
                    <a href="{{ route('service.single',$item->slug) }}" class="btn-primary">
                        Learn More
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_365_4035)">
                                <path d="M8 14L12 10L8 6" stroke="#B81556" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_365_4035">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="{{ route('service.single',$item->id) }}" class="link__overlay"></a>
                </div>
            @endforeach

               

            </div>

        </div><!-- end container -->
    </section><!-- end agricultural-excellence -->


    @if($opportunities->status=='active')
    <section class="job-explore">
        <div class="container">
            <div class="job-explore-wrapper">
                <div class="job-explore-content">
                    <h2>{{ $opportunities->title }}</h2>
                    <p>{{ $opportunities->description }}</p>
                    <a href="{{ route('teams') }}" class="btn-transparent">
                        Join Our Team
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_373_2053)">
                                <path d="M8 14L12 10L8 6" stroke="#B81556" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_373_2053">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="job-explore-thumbnail">
                    <img src="{{ Storage::url($opportunities->image) }}" alt="{{ $opportunities->title }}">
                </div>
            </div>
        </div><!-- end container -->
    </section><!-- end job-explore -->
    @endif




    <section class="get-in-touch">
        <div class="container">
            <div class="get-in-touch-wrapper">
                <h3>If you need our Agrovet Services, Feel free to Contact our team</h3>
                <div class="btn-group">
                    <a href="{{ route('contacts') }}" class="btn-primary btn-white btn-contact">
                        Contact Us
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_373_2681)">
                                <path d="M8 14L12 10L8 6" stroke="#B81556" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_373_2681">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="tel:+88 02 8829468" class="btn-transparent btn-white icon">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M18.3332 14.1V16.6C18.3341 16.8321 18.2866 17.0618 18.1936 17.2744C18.1006 17.4871 17.9643 17.678 17.7933 17.8349C17.6222 17.9918 17.4203 18.1112 17.2005 18.1856C16.9806 18.2599 16.7477 18.2875 16.5165 18.2666C13.9522 17.988 11.489 17.1118 9.32486 15.7083C7.31139 14.4289 5.60431 12.7218 4.32486 10.7083C2.91651 8.53432 2.04007 6.05914 1.76653 3.48331C1.7457 3.25287 1.77309 3.02061 1.84695 2.80133C1.9208 2.58205 2.03951 2.38055 2.1955 2.20966C2.3515 2.03877 2.54137 1.90224 2.75302 1.80875C2.96468 1.71526 3.19348 1.66686 3.42486 1.66665H5.92486C6.32928 1.66267 6.72136 1.80588 7.028 2.06959C7.33464 2.3333 7.53493 2.69952 7.59153 3.09998C7.69705 3.90003 7.89274 4.68558 8.17486 5.44165C8.28698 5.73992 8.31125 6.06407 8.24478 6.37571C8.17832 6.68735 8.02392 6.9734 7.79986 7.19998L6.74153 8.25831C7.92783 10.3446 9.65524 12.072 11.7415 13.2583L12.7999 12.2C13.0264 11.9759 13.3125 11.8215 13.6241 11.7551C13.9358 11.6886 14.2599 11.7129 14.5582 11.825C15.3143 12.1071 16.0998 12.3028 16.8999 12.4083C17.3047 12.4654 17.6744 12.6693 17.9386 12.9812C18.2029 13.2931 18.3433 13.6913 18.3332 14.1Z"
                                stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        {{ $setting->phone_one }}
                    </a>
                </div>
            </div>
        </div>
    </section>



    <section class="client-testimonial">
        <div class="container">
            <div class="section-head-left">
                <h2>What Our Clients Say About Us?</h2>
            </div>
            <div class="client-testimonial-slider">
                <div class="client-testimonial-wrapper">

                    @foreach($reviews as $item)
                    <div class="client-testimonial-item">
                        <div class="client-testimonial-item-inner">
                            <div class="client-testimonial-top">
                                <img src="{{Storage::url($item->image) }}" alt="{{ $item->name }}">
                                <div class="top-content">
                                    <div class="title">{{ $item->name }}</div>
                                    <div class="designation">{{ $item->designation }}</div>
                                </div>
                            </div>

                            <svg width="457" height="10" viewBox="0 0 457 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 8.99951H24.626L32.4345 0.999512L39.7426 8.99951H456" stroke="#04440A"
                                    stroke-width="2" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <div class="client-description">{{ $item->review_text }}</div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>
        </div>
    </section>




    <section class="latest-insights">
        <div class="container">
            <div class="section-head">
                <h2 class="section-title">Latest News</h2>
                <a href="{{ route('news') }}" class="btn-transparent">
                    View All
                    <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_373_95)">
                            <path d="M8 14.5L12 10.5L8 6.5" stroke="#B81556" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_373_95">
                                <rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="latest-insights-slider">

            @foreach($news as $item)
                <div class="insights-item">
                    <img src="{{ Storage::url($item->image) }}" alt="{{ $item->title }}">
                    <div class="insights-item-content">
                        <p class="date">{{ $item->post_date }}</p>
                        <h3>{{ $item->title }}</h3>
                    </div>
                    <a href="{{ route('news.single',$item->slug) }}"
                        class="link__overlay"></a>
                </div>
                @endforeach

               
            </div>

            <a href="{{ route('news') }}" class="btn-transparent for-mobile">
                View All
                <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_373_95)">
                        <path d="M8 14.5L12 10.5L8 6.5" stroke="#B81556" stroke-width="1.5" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </g>
                    <defs>
                        <clipPath id="clip0_373_95">
                            <rect width="20" height="20" fill="white" transform="translate(0 0.5)" />
                        </clipPath>
                    </defs>
                </svg>
            </a>
        </div><!-- end container -->
    </section><!-- end latest-insights -->

    
    
    <section class="aci-promo-section ">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="section-title" style="text-align: center;">Our Brands</h2>
                </div>
            </div>
            <div class="aci-promo-wrapper">
                @foreach($brands as $item)
                <div class="aci-promo-item wow slideInUp" data-wow-delay=".2s" data-wow-duration="1s">
                    <div class="promo-icon" style="width: 200px;">
                        <img src="{{ Storage::url($item->image) }}" alt="{{$item->name}}" />
                    </div>
                    <!-- <div class="promo-icon-content">
                        <div class="icon-title">{{$item->name}}</div>
                    </div> -->
                </div>
                @endforeach
                
                <!-- end aci-promo-item -->
            </div>
        </div>
        <!-- end container -->
    </section>



    
@endsection 
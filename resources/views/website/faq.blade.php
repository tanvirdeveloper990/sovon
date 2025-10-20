@extends('website.layouts.app')

@section('title','FAQ')

@section('content')
<section class="aci__banner-section">
    <style>
        #banner-bg- {
            background-image: url('/assets/images/Rectangle 2 (9).png');
        }
    </style>
    <div id="banner-bg-" class="aci__banner-bg"></div>
    <div class="act__banner-overlay"></div>
    <div class="container">
        <div class="banner-content">
            <h1>FAQ</h1>
            <p></p>
        </div>
    </div><!-- end container -->
</section><!-- end banner -->
<section class="aci__breadcrumb bg-white">
    <div class="container">
        <ul class="aci__breadcrumb-list">
            <li><a href="/">Home </a><span>/</span></li>
            <li>FAQ</li>
        </ul>
    </div>
</section>


<section class="faq-wrapper">
    <div class="container">
        <div class="faq-wrapper-inner">
            <h2>Frequently Asked Question</h2>

            <div class="faq-accordion">

                @foreach ($data as $item)

                <div class="faq-accordion-item">
                    <div class="faq-title">
                        {{ $item->question}}

                        <button type="button" class="plus">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 4.375C14.443 4.375 14.8091 4.70418 14.867 5.13127L14.875 5.25V13.1238L22.75 13.125C23.2332 13.125 23.625 13.5168 23.625 14C23.625 14.443 23.2958 14.8091 22.8687 14.867L22.75 14.875L14.875 14.8738V22.75C14.875 23.2332 14.4832 23.625 14 23.625C13.557 23.625 13.1909 23.2958 13.133 22.8687L13.125 22.75V14.8738L5.25 14.875C4.76675 14.875 4.375 14.4832 4.375 14C4.375 13.557 4.70418 13.1909 5.13127 13.133L5.25 13.125L13.125 13.1238V5.25C13.125 4.76675 13.5168 4.375 14 4.375Z" fill="#04440A" />
                            </svg>
                        </button>

                        <button type="button" class="minus">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22.75 13.125C23.2332 13.125 23.625 13.5168 23.625 14C23.625 14.443 23.2958 14.8091 22.8687 14.867L22.75 14.875H5.25C4.76675 14.875 4.375 14.4832 4.375 14C4.375 13.557 4.70418 13.1909 5.13127 13.133L5.25 13.125H22.75Z" fill="#04440A" />
                            </svg>
                        </button>
                    </div>
                    <div class="faq-content">
                        <p>
                             {{ $item->answer}}
                        </p>
                    </div>
                </div>

                @endforeach




            </div>
        </div>
    </div>
</section>

<section class="get-in-touch listing-touch">
    <div
        class="bg-image"
        style="background-color:green"></div>
    <div class="touch-overlay"></div>
    <div class="container">
        <div class="get-in-touch-wrapper">
            <h3>
                Still looking for an answer?
            </h3>
            <div class="btn-group">
                <a href="{{ route('contacts') }}" class="btn-primary btn-white">
                    Contact Us
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_373_2681)">
                            <path
                                d="M8 14L12 10L8 6"
                                stroke="#B81556"
                                stroke-width="1.5"
                                stroke-linecap="round"
                                stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_373_2681">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>

                <a href="tel:{{ $setting->phone_one }}" class="btn-transparent btn-white icon">
                    <svg
                        width="20"
                        height="20"
                        viewBox="0 0 20 20"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.3332 14.1V16.6C18.3341 16.8321 18.2866 17.0618 18.1936 17.2744C18.1006 17.4871 17.9643 17.678 17.7933 17.8349C17.6222 17.9918 17.4203 18.1112 17.2005 18.1856C16.9806 18.2599 16.7477 18.2875 16.5165 18.2666C13.9522 17.988 11.489 17.1118 9.32486 15.7083C7.31139 14.4289 5.60431 12.7218 4.32486 10.7083C2.91651 8.53432 2.04007 6.05914 1.76653 3.48331C1.7457 3.25287 1.77309 3.02061 1.84695 2.80133C1.9208 2.58205 2.03951 2.38055 2.1955 2.20966C2.3515 2.03877 2.54137 1.90224 2.75302 1.80875C2.96468 1.71526 3.19348 1.66686 3.42486 1.66665H5.92486C6.32928 1.66267 6.72136 1.80588 7.028 2.06959C7.33464 2.3333 7.53493 2.69952 7.59153 3.09998C7.69705 3.90003 7.89274 4.68558 8.17486 5.44165C8.28698 5.73992 8.31125 6.06407 8.24478 6.37571C8.17832 6.68735 8.02392 6.9734 7.79986 7.19998L6.74153 8.25831C7.92783 10.3446 9.65524 12.072 11.7415 13.2583L12.7999 12.2C13.0264 11.9759 13.3125 11.8215 13.6241 11.7551C13.9358 11.6886 14.2599 11.7129 14.5582 11.825C15.3143 12.1071 16.0998 12.3028 16.8999 12.4083C17.3047 12.4654 17.6744 12.6693 17.9386 12.9812C18.2029 13.2931 18.3433 13.6913 18.3332 14.1Z"
                            stroke="white"
                            stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                    {{ $setting->phone_one }}
                </a>

            </div>
        </div>
    </div>
</section>
@endsection
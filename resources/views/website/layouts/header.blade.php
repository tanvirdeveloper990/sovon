<header>
    <div class="header-top">
        <div class="container">
            <div class="header-top-left">
                <ul>
                    <li>
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.7" clip-path="url(#clip0_318_2710)">
                                <path
                                    d="M14.6665 11.28V13.28C14.6672 13.4657 14.6292 13.6494 14.5548 13.8195C14.4804 13.9897 14.3713 14.1424 14.2345 14.2679C14.0977 14.3934 13.9362 14.489 13.7603 14.5485C13.5844 14.6079 13.398 14.63 13.2131 14.6133C11.1617 14.3904 9.19113 13.6894 7.45979 12.5667C5.84901 11.5431 4.48335 10.1774 3.45979 8.56665C2.33311 6.82745 1.63195 4.84731 1.41313 2.78665C1.39647 2.60229 1.41838 2.41649 1.47746 2.24107C1.53654 2.06564 1.63151 1.90444 1.7563 1.76773C1.8811 1.63102 2.033 1.52179 2.20232 1.447C2.37164 1.37221 2.55469 1.33349 2.73979 1.33332H4.73979C5.06333 1.33013 5.37699 1.4447 5.6223 1.65567C5.86761 1.86664 6.02784 2.15961 6.07313 2.47998C6.15754 3.12003 6.31409 3.74847 6.53979 4.35332C6.62949 4.59193 6.6489 4.85126 6.59573 5.10057C6.54256 5.34988 6.41903 5.57872 6.23979 5.75998L5.39313 6.60665C6.34216 8.27568 7.7241 9.65761 9.39313 10.6067L10.2398 9.75998C10.4211 9.58074 10.6499 9.45722 10.8992 9.40405C11.1485 9.35088 11.4078 9.37029 11.6465 9.45998C12.2513 9.68568 12.8797 9.84224 13.5198 9.92665C13.8436 9.97234 14.1394 10.1355 14.3508 10.385C14.5622 10.6345 14.6746 10.953 14.6665 11.28Z"
                                    stroke="#270110" stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_318_2710">
                                    <rect width="16" height="16" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <a href="tel:{{ $setting->phone_one }}">Call Us: {{ $setting->phone_one }}</a>
                    </li>
                    <li>
                        <svg width="16" height="17" viewBox="0 0 16 17" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g opacity="0.7">
                                <path
                                    d="M2.66683 3.16675H13.3335C14.0668 3.16675 14.6668 3.76675 14.6668 4.50008V12.5001C14.6668 13.2334 14.0668 13.8334 13.3335 13.8334H2.66683C1.9335 13.8334 1.3335 13.2334 1.3335 12.5001V4.50008C1.3335 3.76675 1.9335 3.16675 2.66683 3.16675Z"
                                    stroke="#270110" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.6668 4.5L8.00016 9.16667L1.3335 4.5" stroke="#270110"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </g>
                        </svg>
                        <a href="mailto:{{ $setting->email_one }}">{{ $setting->email_one }}</a>
                    </li>
                </ul>
            </div>
            <div class="header-top-right">
                <ul>
                    <li>
                        <a href="{{ route('faq') }}">FAQs</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">News &amp; Media</a>
                    </li>

                </ul>
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="container">
            <div class="logo-section">
                <a href="index.html"><img src="{{ Storage::url($setting->header_logo) }}" alt="{{ $setting->company_name }}"></a>
            </div>
            <!-- end logo-section -->

            <div class="menu-right-mobile">

                <button type="button" class="menu__expend">
                    <svg width="40" height="41" viewBox="0 0 40 41" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="0.5" y="1" width="39" height="39" rx="19.5" stroke="#E7E6E6" />
                        <path d="M11 20.5H29" stroke="#B81556" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M11 14.5H29" stroke="#B81556" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                        <path d="M11 26.5H29" stroke="#B81556" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg>
                </button>
            </div>

            <div class="menu-wrapper">
                <div class="menu-wrapper-top">
                    <img style="width: 150px;" src="assets/images/logo.png" alt="" />
                    <button type="button" class="menu__close">
                        <svg width="40" height="41" viewBox="0 0 40 41" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <rect y="0.5" width="40" height="40" rx="20" fill="#B81556" />
                            <path d="M26 14.5L14 26.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path d="M14 14.5L26 26.5" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>

                <ul class="primary-menu">

                    <!-- <li class="submenu submenu-list">
                        <a href="#">About Us</a>
                        <ul>
                            <li>
                                <a href="overview.html">
                                    Overview

                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#E7E6E6" />
                                        <g clip-path="url(#clip0_1682_18307)">
                                            <path d="M14 20L18 16L14 12" stroke="#270110" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1682_18307">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(6 6)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="leaders.html">
                                    Our leaders

                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#E7E6E6" />
                                        <g clip-path="url(#clip0_1682_18307)">
                                            <path d="M14 20L18 16L14 12" stroke="#270110" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1682_18307">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(6 6)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="research.html">
                                    Research And Development

                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#E7E6E6" />
                                        <g clip-path="url(#clip0_1682_18307)">
                                            <path d="M14 20L18 16L14 12" stroke="#270110" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1682_18307">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(6 6)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="manufacturing.html">
                                    Manufacturing facilities

                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#E7E6E6" />
                                        <g clip-path="url(#clip0_1682_18307)">
                                            <path d="M14 20L18 16L14 12" stroke="#270110" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1682_18307">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(6 6)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="quality.html">
                                    Quality Assurance

                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#E7E6E6" />
                                        <g clip-path="url(#clip0_1682_18307)">
                                            <path d="M14 20L18 16L14 12" stroke="#270110" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1682_18307">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(6 6)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="breeder.html">
                                    Breeder Farm &amp; Hatchery

                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#E7E6E6" />
                                        <g clip-path="url(#clip0_1682_18307)">
                                            <path d="M14 20L18 16L14 12" stroke="#270110" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1682_18307">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(6 6)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </li>
                            <li>
                                <a href="drop.html">
                                    Our Depot

                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.5" y="0.5" width="31" height="31" rx="15.5" stroke="#E7E6E6" />
                                        <g clip-path="url(#clip0_1682_18307)">
                                            <path d="M14 20L18 16L14 12" stroke="#270110" stroke-width="1.5"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1682_18307">
                                                <rect width="20" height="20" fill="white"
                                                    transform="translate(6 6)" />
                                            </clipPath>
                                        </defs>
                                    </svg>

                                </a>
                            </li>
                        </ul>
                    </li> -->

                    <li class="submenu">
                        <!-- <li class="submenu"> -->
                        <a href="#">Products</a>
                        <div class="aci-megamenu">
                            <div class="aci-megamenu-inner">
                                @foreach($categories as $category)
                                <div class="aci-megamenu-item">
                                    <h4>{{ $category->name }}</h4>
                                    <ul>
                                        @foreach($category->subcategories as $item)
                                        <li>
                                            <a href="#">
                                                {{ $item->name }}
                                                <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <rect x="0.5" y="0.5" width="31" height="31" rx="15.5"
                                                        stroke="#E7E6E6" />
                                                    <g clip-path="url(#clip0_343_2255)">
                                                        <path d="M14 20L18 16L14 12" stroke="#270110"
                                                            stroke-width="1.5" stroke-linecap="round"
                                                            stroke-linejoin="round" />
                                                    </g>
                                                    <defs>
                                                        <clipPath id="clip0_343_2255">
                                                            <rect width="20" height="20" fill="white"
                                                                transform="translate(6 6)" />
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
                                            <g clip-path="url(#clip0_343_2293)">
                                                <path d="M8 14L12 10L8 6" stroke="#270110" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_343_2293">
                                                    <rect width="20" height="20" fill="white" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                                @endforeach

                                
                            </div>
                            <a href="#" class="btn-primary">
                                View All Products
                                <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_343_1521)">
                                        <path d="M8.5 14L12.5 10L8.5 6" stroke="white" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_343_1521">
                                            <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                        </div>
                    </li>

                    <li class="submenu">
                        <a href="#">Services</a>
                        <div class="aci-megamenu menu-service__list">
                            <div class="aci-megamenu-inner">

                                @foreach($services as $item)
                                <div class="aci-megamenu-service">
                                    <img src="{{ Storage::url($item->icon) }}"
                                        alt="{{ $item->name }}">
                                    <h3>{{ $item->name }}</h3>
                                    <a href="{{ route('service.single',$item->slug) }}"></a>
                                </div>
                                @endforeach


                            </div>
                        </div>
                    </li>

                    <li><a href="{{ route('events') }}">Events</a></li>
                </ul>

                <div class="mobile-footer-menu">
                    <ul class="mobile-menu-contact">
                        <li>
                            <a href="tel:+88 02 8829468">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.7">
                                        <path
                                            d="M22.0004 16.9201V19.9201C22.0016 20.1986 21.9445 20.4743 21.8329 20.7294C21.7214 20.9846 21.5577 21.2137 21.3525 21.402C21.1473 21.5902 20.905 21.7336 20.6412 21.8228C20.3773 21.912 20.0978 21.9452 19.8204 21.9201C16.7433 21.5857 13.7874 20.5342 11.1904 18.8501C8.77425 17.3148 6.72576 15.2663 5.19042 12.8501C3.5004 10.2413 2.44866 7.27109 2.12042 4.1801C2.09543 3.90356 2.1283 3.62486 2.21692 3.36172C2.30555 3.09859 2.44799 2.85679 2.63519 2.65172C2.82238 2.44665 3.05023 2.28281 3.30421 2.17062C3.5582 2.05843 3.83276 2.00036 4.11042 2.0001H7.11042C7.59573 1.99532 8.06621 2.16718 8.43418 2.48363C8.80215 2.80008 9.0425 3.23954 9.11042 3.7201C9.23704 4.68016 9.47187 5.62282 9.81042 6.5301C9.94497 6.88802 9.97408 7.27701 9.89433 7.65098C9.81457 8.02494 9.62928 8.36821 9.36042 8.6401L8.09042 9.9101C9.51398 12.4136 11.5869 14.4865 14.0904 15.9101L15.3604 14.6401C15.6323 14.3712 15.9756 14.1859 16.3495 14.1062C16.7235 14.0264 17.1125 14.0556 17.4704 14.1901C18.3777 14.5286 19.3204 14.7635 20.2804 14.8901C20.7662 14.9586 21.2098 15.2033 21.527 15.5776C21.8441 15.9519 22.0126 16.4297 22.0004 16.9201Z"
                                            stroke="#B81556" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </g>
                                </svg>
                                <span>Call Us: {{ $setting->phone_one }}</span>
                            </a>
                        </li>
                        <li>
                            <a href="mailto:{{ $setting->email_one }}">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g opacity="0.7">
                                        <path
                                            d="M4 4H20C21.1 4 22 4.9 22 6V18C22 19.1 21.1 20 20 20H4C2.9 20 2 19.1 2 18V6C2 4.9 2.9 4 4 4Z"
                                            stroke="#B81556" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M22 6L12 13L2 6" stroke="#B81556" stroke-width="1.5"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </g>
                                </svg>
                                <span>{{ $setting->email_one }}</span>
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="header-right">

                    <a href="{{ route('contacts') }}" class="btn-primary">
                        Contact Us
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_318_2173)">
                                <path d="M8 14L12 10L8 6" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </g>
                            <defs>
                                <clipPath id="clip0_318_2173">
                                    <rect width="20" height="20" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
            <!-- end logo-section -->
        </div>
        <!-- end container -->
    </div>
</header>
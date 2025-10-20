<footer>

    <div class="footer-bottom">
        <div class="container">

            <div class="footer-menu">
                <div class="footer-logo">
                    <a href="index.html"><img src="{{ Storage::url($setting->footer_logo) }}" alt="{{ $setting->company_name }}"></a>
                </div>
                <div class="footer-title">
                    {{ $setting->company_name }}
                </div>

                <div class="footer-address">
                    <ul>
                        <li>
                            <svg width="16" height="20" viewBox="0 0 16 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M13 10.9091C13 14.7273 8 18 8 18C8 18 3 14.7273 3 10.9091C3 9.60712 3.52678 8.35847 4.46447 7.43784C5.40215 6.51721 6.67392 6 8 6C9.32608 6 10.5979 6.51721 11.5355 7.43784C12.4732 8.35847 13 9.60712 13 10.9091Z"
                                    stroke="#04440A" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M8.00016 12.5454C8.92064 12.5454 9.66683 11.8128 9.66683 10.9091C9.66683 10.0053 8.92064 9.27271 8.00016 9.27271C7.07969 9.27271 6.3335 10.0053 6.3335 10.9091C6.3335 11.8128 7.07969 12.5454 8.00016 12.5454Z"
                                    stroke="#04440A" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            {{ $setting->address }}
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_349_681)">
                                    <path
                                        d="M14.6665 11.28V13.28C14.6672 13.4657 14.6292 13.6494 14.5548 13.8195C14.4804 13.9897 14.3713 14.1424 14.2345 14.2679C14.0977 14.3934 13.9362 14.489 13.7603 14.5485C13.5844 14.6079 13.398 14.63 13.2131 14.6133C11.1617 14.3904 9.19113 13.6894 7.45979 12.5667C5.84901 11.5431 4.48335 10.1774 3.45979 8.56665C2.33311 6.82745 1.63195 4.84731 1.41313 2.78665C1.39647 2.60229 1.41838 2.41649 1.47746 2.24107C1.53654 2.06564 1.63151 1.90444 1.7563 1.76773C1.8811 1.63102 2.033 1.52179 2.20232 1.447C2.37164 1.37221 2.55469 1.33349 2.73979 1.33332H4.73979C5.06333 1.33013 5.37699 1.4447 5.6223 1.65567C5.86761 1.86664 6.02784 2.15961 6.07313 2.47998C6.15754 3.12003 6.31409 3.74847 6.53979 4.35332C6.62949 4.59193 6.6489 4.85126 6.59573 5.10057C6.54256 5.34988 6.41903 5.57872 6.23979 5.75998L5.39313 6.60665C6.34216 8.27568 7.7241 9.65761 9.39313 10.6067L10.2398 9.75998C10.4211 9.58074 10.6499 9.45722 10.8992 9.40405C11.1485 9.35088 11.4078 9.37029 11.6465 9.45998C12.2513 9.68568 12.8797 9.84224 13.5198 9.92665C13.8436 9.97234 14.1394 10.1355 14.3508 10.385C14.5622 10.6345 14.6746 10.953 14.6665 11.28Z"
                                        stroke="#04440A" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_349_681">
                                        <rect width="16" height="16" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                            <a href="tel:{{ $setting->phone_one }}">{{ $setting->phone_one }}</a>
                        </li>
                        <li>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.66683 2.66675H13.3335C14.0668 2.66675 14.6668 3.26675 14.6668 4.00008V12.0001C14.6668 12.7334 14.0668 13.3334 13.3335 13.3334H2.66683C1.9335 13.3334 1.3335 12.7334 1.3335 12.0001V4.00008C1.3335 3.26675 1.9335 2.66675 2.66683 2.66675Z"
                                    stroke="#04440A" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M14.6668 4L8.00016 8.66667L1.3335 4" stroke="#04440A" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <a href="mailto:{{ $setting->email_one }}">{{ $setting->email_one }}</a>
                        </li>
                    </ul>
                </div>
            </div><!-- end footer-menu -->


            <div class="footer-menu menu-accordion-menu">
                <div class="footer-title">
                    Quick Link
                    <span class="mobile-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="#270110" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>

                <ul>
                    <li>
                        <a href="{{ route('faq') }}">FAQ</a>
                    </li>
                    <li>
                        <a href="{{ route('events') }}">Events</a>
                    </li>
                    <li>
                        <a href="{{ route('news') }}">News &amp; Media</a>
                    </li>
                    <li>
                        <a href="{{ route('contacts') }}">Contact Us</a>
                    </li>
                    
                </ul>

            </div><!-- end footer-menu -->


            <!-- <div class="footer-menu menu-accordion-menu">
                <div class="footer-title">
                    About Us
                    <span class="mobile-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="#270110" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>

                <ul>
                    <li>
                        <a href="/our-leaders">Our Leader</a>
                    </li>
                    <li>
                        <a href="/research-and-development">R&amp;D information</a>
                    </li>
                    <li>
                        <a href="/manufacturing-facilities">Manufacturing Facilities</a>
                    </li>
                </ul>

            </div> -->
            <!-- end footer-menu -->

            <div class="footer-menu menu-accordion-menu">
                <div class="footer-title">
                    Products
                    <span class="mobile-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="#270110" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>

                <ul>
                    @foreach($categories as $item)
                    <li>
                        <a href="#">{{ $item->name }}</a>
                    </li>
                    @endforeach
                   
                </ul>

            </div><!-- end footer-menu -->

            <div class="footer-menu menu-accordion-menu">
                <div class="footer-title">
                    Services
                    <span class="mobile-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 9L12 15L18 9" stroke="#270110" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </span>
                </div>

                <ul>
                    @foreach($services as $item)
                    <li>
                        <a href="{{ route('service.single',$item->id) }}">{{ $item->name }}</a>
                    </li>
                    @endforeach
                   
                </ul>

            </div><!-- end footer-menu -->




        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <p>&copy; {{ $setting->copy_right }}</p>
            <ul>


                <li>
                    <a href="{{ $setting->linkedin }}">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                            viewBox="0 0 50 50">
                            <path
                                d="M25,2C12.318,2,2,12.317,2,25s10.318,23,23,23s23-10.317,23-23S37.682,2,25,2z M18,35h-4V20h4V35z M16,17 c-1.105,0-2-0.895-2-2c0-1.105,0.895-2,2-2s2,0.895,2,2C18,16.105,17.105,17,16,17z M37,35h-4v-5v-2.5c0-1.925-1.575-3.5-3.5-3.5 S26,25.575,26,27.5V35h-4V20h4v1.816C27.168,20.694,28.752,20,30.5,20c3.59,0,6.5,2.91,6.5,6.5V35z">
                            </path>
                        </svg>
                    </a>
                </li>

                <li>
                    <a href="{{ $setting->facebook }}"><svg width="30" height="30"
                            viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="0.5" y="0.5" width="29" height="29" rx="14.5" stroke="#130008"
                                stroke-opacity="0.1" />
                            <g clip-path="url(#clip0_349_730)">
                                <path
                                    d="M18.2334 15.8155L18.6191 13.301H16.2065V11.6692C16.2065 10.9812 16.5435 10.3107 17.6241 10.3107H18.721V8.16991C18.721 8.16991 17.7255 8 16.7738 8C14.7867 8 13.488 9.20427 13.488 11.3845V13.301H11.2793V15.8155H13.488V21.8943C13.9309 21.9638 14.3849 22 14.8473 22C15.3097 22 15.7636 21.9638 16.2065 21.8943V15.8155H18.2334Z"
                                    fill="#270110" />
                            </g>
                            <defs>
                                <clipPath id="clip0_349_730">
                                    <rect width="14" height="14" fill="white" transform="translate(8 8)" />
                                </clipPath>
                            </defs>
                        </svg></a>
                </li>

            </ul>
        </div>
    </div>

</footer>
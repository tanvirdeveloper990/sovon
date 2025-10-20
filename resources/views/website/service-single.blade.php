@extends('website.layouts.app')

@section('title','Service-'.$data->name)

@section('content')
<section class="aci__banner-section">
    <style nonce="2ea67fc5ce468a9ba20e7bbb5bdfea14">
        #banner-bg- {
            background-image: url('{{Storage::url($data->banner)}}');
        }
    </style>
    <div id="banner-bg-" class="aci__banner-bg"></div>
    <div class="act__banner-overlay"></div>
    <div class="container">
        <div class="banner-content">
            <h1>{{$data->name}}</h1>
            <p></p>
        </div>
    </div><!-- end container -->
</section><!-- end banner -->
<section class="aci__breadcrumb bg-white">
    <div class="container">
        <ul class="aci__breadcrumb-list">
            <li><a href="/">Home </a><span>/</span></li>
            <li>{{$data->name}}</li>
        </ul>
    </div>
</section>


<section class="event-details-wrapper service-details">
    <div class="container">
        <div class="event-sidebar">
            <div class="event-sidebar-inner">
                <h3>{{$data->contact_title}}</h3>
                <p>
                    {{$data->contact_description}}
                </p>
                <a href="{{ route('contacts') }}" class="btn-primary bg-white" id="open-contact-form">
                    Contact Us

                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1579_21111)">
                            <path d="M8.5 14L12.5 10L8.5 6" stroke="#B81556" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1579_21111">
                                <rect width="20" height="20" fill="white" transform="translate(0.5)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <a href="{{$data->contact_number}}" class="btn-transparent">
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M18.8332 14.1V16.6C18.8341 16.8321 18.7866 17.0618 18.6936 17.2744C18.6006 17.4871 18.4643 17.678 18.2933 17.8349C18.1222 17.9918 17.9203 18.1112 17.7005 18.1856C17.4806 18.2599 17.2477 18.2875 17.0165 18.2666C14.4522 17.988 11.989 17.1118 9.82486 15.7083C7.81139 14.4289 6.10431 12.7218 4.82486 10.7083C3.41651 8.53432 2.54007 6.05914 2.26653 3.48331C2.2457 3.25287 2.27309 3.02061 2.34695 2.80133C2.4208 2.58205 2.53951 2.38055 2.6955 2.20966C2.8515 2.03877 3.04137 1.90224 3.25302 1.80875C3.46468 1.71526 3.69348 1.66686 3.92486 1.66665H6.42486C6.82928 1.66267 7.22136 1.80588 7.528 2.06959C7.83464 2.3333 8.03493 2.69952 8.09153 3.09998C8.19705 3.90003 8.39274 4.68558 8.67486 5.44165C8.78698 5.73992 8.81125 6.06407 8.74478 6.37571C8.67832 6.68735 8.52392 6.9734 8.29986 7.19998L7.24153 8.25831C8.42783 10.3446 10.1552 12.072 12.2415 13.2583L13.2999 12.2C13.5264 11.9759 13.8125 11.8215 14.1241 11.7551C14.4358 11.6886 14.7599 11.7129 15.0582 11.825C15.8143 12.1071 16.5998 12.3028 17.3999 12.4083C17.8047 12.4654 18.1744 12.6693 18.4386 12.9812C18.7029 13.2931 18.8433 13.6913 18.8332 14.1Z"
                            stroke="white" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    {{$data->contact_number}}
                </a>
            </div>

            <a href="{{ Storage::url($data->file_download) }}"
                class="download-btn" download="" target="_blank">
                <!-- class="download-btn" download="Download PDF.pdf" target="_blank"> -->
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.6663 2.66669H7.99967C7.29243 2.66669 6.61415 2.94764 6.11406 3.44774C5.61396 3.94783 5.33301 4.62611 5.33301 5.33335V26.6667C5.33301 27.3739 5.61396 28.0522 6.11406 28.5523C6.61415 29.0524 7.29243 29.3334 7.99967 29.3334H23.9997C24.7069 29.3334 25.3852 29.0524 25.8853 28.5523C26.3854 28.0522 26.6663 27.3739 26.6663 26.6667V10.6667L18.6663 2.66669Z"
                        stroke="#B81556" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M18.667 2.66669V10.6667H26.667" stroke="#B81556" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M21.3337 17.3333H10.667" stroke="#B81556" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M21.3337 22.6667H10.667" stroke="#B81556" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M13.3337 12H12.0003H10.667" stroke="#B81556" stroke-width="2"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <span>Download PDF</span>

                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M21 15V19C21 19.5304 20.7893 20.0391 20.4142 20.4142C20.0391 20.7893 19.5304 21 19 21H5C4.46957 21 3.96086 20.7893 3.58579 20.4142C3.21071 20.0391 3 19.5304 3 19V15"
                        stroke="#B81556" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    <path d="M7 10L12 15L17 10" stroke="#B81556" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M12 15V3" stroke="#B81556" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" />
                </svg>
            </a>

        </div>
        <div class="event-details-content">
            <h4>Overview</h4>
            <p class="top">
                {{$data->overview}}
            </p>
            <h4>Offered Services</h4>
            <div class="service-text-list">

                <div class="service-text-content">
                    <h4>Custom Feed Formulations</h4>
                    <p>Tailored feed formulations to meet the specific nutritional needs of dairy and beef
                        cattle based on age, lactation, and growth stages.</p>
                </div>

                <div class="service-text-content">
                    <h4>Nutritional Consulting</h4>
                    <p>Expert advice on cattle nutrition to optimize health, milk production, and meat quality.
                        Monthly meeting with dealers and farmers is conducted through qualified and professional
                        veterinary doctors.&nbsp;</p>
                </div>

                <div class="service-text-content">
                    <h4>Technical Support</h4>
                    <p>On-site (Physical Visit) and remote (Over Phone) support for feed management, feeding
                        practices, and troubleshooting issues specific to cattle.&nbsp;</p>
                </div>

                <div class="service-text-content">
                    <h4>Quality Assurance</h4>
                    <p>Stringent quality control measures to ensure the safety and consistency of cattle feed
                        products.</p>
                </div>

                <div class="service-text-content">
                    <h4>Training and Education</h4>
                    <p>Workshops and seminars for cattle farmers on best practices in feed usage, cattle
                        husbandry, and nutrition.</p>
                </div>

                <div class="service-text-content">
                    <h4>Logistics and Distribution</h4>
                    <p>Efficient distribution networks to provide timely delivery of cattle feed products.</p>
                </div>

                <div class="service-text-content">
                    <h4>Health and Welfare Programs</h4>
                    <p>Support for cattle health programs, including vaccination and disease prevention.</p>
                </div>
            </div>
            <img class="feature-image"
                src="{{Storage::url($data->banner)}}" alt="{{$data->name}}" />
            <h2>General Questions</h2>

            <div class="faq-accordion">
                <div class="faq-accordion-item">
                    <div class="faq-title">
                        Who is the largest supplier of animal feed?

                        <button type="button" class="plus">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 4.375C14.443 4.375 14.8091 4.70418 14.867 5.13127L14.875 5.25V13.1238L22.75 13.125C23.2332 13.125 23.625 13.5168 23.625 14C23.625 14.443 23.2958 14.8091 22.8687 14.867L22.75 14.875L14.875 14.8738V22.75C14.875 23.2332 14.4832 23.625 14 23.625C13.557 23.625 13.1909 23.2958 13.133 22.8687L13.125 22.75V14.8738L5.25 14.875C4.76675 14.875 4.375 14.4832 4.375 14C4.375 13.557 4.70418 13.1909 5.13127 13.133L5.25 13.125L13.125 13.1238V5.25C13.125 4.76675 13.5168 4.375 14 4.375Z"
                                    fill="#04440A" />
                            </svg>
                        </button>

                        <button type="button" class="minus">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.75 13.125C23.2332 13.125 23.625 13.5168 23.625 14C23.625 14.443 23.2958 14.8091 22.8687 14.867L22.75 14.875H5.25C4.76675 14.875 4.375 14.4832 4.375 14C4.375 13.557 4.70418 13.1909 5.13127 13.133L5.25 13.125H22.75Z"
                                    fill="#04440A" />
                            </svg>
                        </button>
                    </div>
                    <div class="faq-content">
                        <p>
                            Highly skilled and trained professionals who are passionate about their work. They
                            undergo continuous training and stay updated with the latest techniques and trends
                            in the gardening industry. With their expertise, they can handle various gardening
                            tasks with precision.
                        </p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-title">
                        Who is the largest supplier of animal feed?

                        <button type="button" class="plus">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 4.375C14.443 4.375 14.8091 4.70418 14.867 5.13127L14.875 5.25V13.1238L22.75 13.125C23.2332 13.125 23.625 13.5168 23.625 14C23.625 14.443 23.2958 14.8091 22.8687 14.867L22.75 14.875L14.875 14.8738V22.75C14.875 23.2332 14.4832 23.625 14 23.625C13.557 23.625 13.1909 23.2958 13.133 22.8687L13.125 22.75V14.8738L5.25 14.875C4.76675 14.875 4.375 14.4832 4.375 14C4.375 13.557 4.70418 13.1909 5.13127 13.133L5.25 13.125L13.125 13.1238V5.25C13.125 4.76675 13.5168 4.375 14 4.375Z"
                                    fill="#04440A" />
                            </svg>
                        </button>

                        <button type="button" class="minus">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.75 13.125C23.2332 13.125 23.625 13.5168 23.625 14C23.625 14.443 23.2958 14.8091 22.8687 14.867L22.75 14.875H5.25C4.76675 14.875 4.375 14.4832 4.375 14C4.375 13.557 4.70418 13.1909 5.13127 13.133L5.25 13.125H22.75Z"
                                    fill="#04440A" />
                            </svg>
                        </button>
                    </div>
                    <div class="faq-content">
                        <p>
                            Highly skilled and trained professionals who are passionate about their work. They
                            undergo continuous training and stay updated with the latest techniques and trends
                            in the gardening industry. With their expertise, they can handle various gardening
                            tasks with precision.
                        </p>
                    </div>
                </div>
                <div class="faq-accordion-item">
                    <div class="faq-title">
                        Who is the largest supplier of animal feed?

                        <button type="button" class="plus">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14 4.375C14.443 4.375 14.8091 4.70418 14.867 5.13127L14.875 5.25V13.1238L22.75 13.125C23.2332 13.125 23.625 13.5168 23.625 14C23.625 14.443 23.2958 14.8091 22.8687 14.867L22.75 14.875L14.875 14.8738V22.75C14.875 23.2332 14.4832 23.625 14 23.625C13.557 23.625 13.1909 23.2958 13.133 22.8687L13.125 22.75V14.8738L5.25 14.875C4.76675 14.875 4.375 14.4832 4.375 14C4.375 13.557 4.70418 13.1909 5.13127 13.133L5.25 13.125L13.125 13.1238V5.25C13.125 4.76675 13.5168 4.375 14 4.375Z"
                                    fill="#04440A" />
                            </svg>
                        </button>

                        <button type="button" class="minus">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M22.75 13.125C23.2332 13.125 23.625 13.5168 23.625 14C23.625 14.443 23.2958 14.8091 22.8687 14.867L22.75 14.875H5.25C4.76675 14.875 4.375 14.4832 4.375 14C4.375 13.557 4.70418 13.1909 5.13127 13.133L5.25 13.125H22.75Z"
                                    fill="#04440A" />
                            </svg>
                        </button>
                    </div>
                    <div class="faq-content">
                        <p>
                            Highly skilled and trained professionals who are passionate about their work. They
                            undergo continuous training and stay updated with the latest techniques and trends
                            in the gardening industry. With their expertise, they can handle various gardening
                            tasks with precision.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
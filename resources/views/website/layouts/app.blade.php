@php 
$setting = \App\Models\Setting::first();
$services = \App\Models\Service::where('status','active')->get();
$categories = \App\Models\Category::with('subcategories')->where('status','active')->get();
@endphp

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title')</title>

    <meta name="description" content="{{ $setting->meta_description }}" />


    <meta itemprop="name" content="{{ $setting->meta_title }}">
    <meta itemprop="description" content="{{ $setting->meta_description }}">


    <meta name="twitter:card" content="{{ $setting->meta_description }}">
    <meta name="twitter:site" content="{{ url('/') }}">
    <meta name="twitter:title" content="{{ $setting->meta_title }}">


    <meta property="og:title" content="{{ $setting->meta_title }}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{ url('/') }}" />

    <meta property="og:description" content="{{ $setting->meta_description }}" />
    <meta property="og:site_name" content="{{ $setting->meta_title }}" />


    <link rel="shortcut icon" href="{{ Storage::url($setting->favicon) }}" type="image/x-icon" />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.6.12/sweetalert2.min.js"></script>

    <link rel="stylesheet" href="{{ asset('/') }}assets/css/main.css">

</head>

<body>


    @include('website.layouts.header')
    <main id="app">
        @yield('content')
    </main>
    @include('website.layouts.footer')

    <script src="{{ asset('/') }}assets/js/jquery.min.js"></script>
    <script src="{{ asset('/') }}assets/js/slick.min.js"></script>
    <script src="{{ asset('/') }}assets/js/jquery.onscreen.js"></script>
    <script src="{{ asset('/') }}assets/js/wow.js"></script>
    <script src="{{ asset('/') }}assets/js/slick-animation.js"></script>
    <script src="{{ asset('/') }}assets/js/magnific.js"></script>
    <script src="{{ asset('/') }}assets/js/vendor.min.js"></script>



</body>

</html>
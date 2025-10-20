@extends('website.layouts.app')

@section('title','News-'.$data->slug)

@section('content')
<section class="aci__breadcrumb bg-white">
    <div class="container">
        <ul class="aci__breadcrumb-list">
            <li><a href="/">Home </a><span>/</span></li>
            <li><a href="{{ route('news') }}" style="text-transform: capitalize;">{{$data->chosse_type}} </a><span>/</span></li>
            <li>{{$data->title}}</li>
        </ul>
    </div>
</section>


<section class="research-content-wrapper">
    <div class="container">
        <div class="research-top">

            <div class="news-category">
                <span class="new-category" style="text-transform: capitalize;">{{$data->chosse_type}} </span>
                <div class="date">{{$data->post_date}}</div>
            </div>
            <h2>{{$data->title}}</h2>
            <img src="{{Storage::url($data->image)}}" alt="{{$data->title}}" />
        </div>

        <div class="research-generic-content">
            
            {!! $data->description !!}

        </div>
</section>

@endsection
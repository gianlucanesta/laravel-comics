@extends('layouts.app')

@section('page_title')
    Comic
@endsection

@section('main_classes')
    light-bg
@endsection

@section('main_content')
    

    <section class="comic-details">

        <div class="blue-bar"></div>

        <div class="comic-container">

            <div class="thumb-box">
                <span class="upper-banner">{{ $comic_info['type'] }}</span>
                <img src="{{$comic_info['thumb']}}" alt="{{$comic_info['title']}}">
                <span class="lower-banner">VIEW GALLERY</span>
            </div>
            
            <div class="adv">
                <div>ADVERTISEMENT</div>
            </div>


            <div class="upper-details">

                <div class="upper-details-left-col">
                    <h1>{{ $comic_info['title'] }}</h1>

                    <div class="price-bar">
                        <div class="left-price-bar">
                            <div>U.S. Price: {{$comic_info['price']}}</div>
                            <div>AVAILABLE</div>
                        </div>
                        <div class="right-price-bar">
                            Check Availability
                        </div>
                    </div>

                    <div class="description">
                        {{$comic_info['description']}}
                    </div>
                </div>

                <div class="upper-details-right-col">
                    <img src="{{ asset('images/adv.jpg')}}" alt="">
                </div>

                
            </div>
            <div class="lower-details">

            </div>
        </div>
    </section>
@endsection
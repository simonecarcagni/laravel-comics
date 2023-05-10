@extends('layouts.app')

@section('page-title')

Home Page
    
@endsection

@section('content')

    <div class="jumbotron ">
        <div class="container h-100 position-relative">
            <div class="current-series position-absolute start-0">
                <h5>CURRENT SERIES</h5>
            </div>
        </div>
    </div>

    <div class="main-content">
        <div class="container">
            <div class="container my-5">
                <ul class="d-flex flex-wrap g-5">
                    @foreach ($comics as $comic)
                        <li class="card-container mx-4">
                            <div class="ms_card">
                                <img class="comic-card" src="{{$comic['thumb']}}" alt="">
                            </div>
                            <h6 class="p-1">{{$comic['title']}} - {{$comic['price']}}</h6>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="load-more">
                <button>LOAD MORE</button>
            </div>
        </div>

    </div>

    <div class="main-banner">
        <div class="container h-100">
            <nav class="h-100">
                <ul class="d-flex h-100 justify-content-around">
                    @foreach ($links as $link)
                        <li class="h-100 d-flex align-items-center p-2">
                            <img src="{{ $link['src'] }}" alt="{{$link['alt']}}">
                            <a class="px-2" href="#">{{$link['name']}}</a>
                        </li>
                    @endforeach
                </ul>
            </nav>
        </div>
    </div>
    
@endsection

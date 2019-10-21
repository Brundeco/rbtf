@extends('layout')

{{-- <script type="text/javascript" src="{!! asset('js/app.min.js') !!}"></script> --}}
@section('title', 'Home page')
    
@section('content')
    <h1>This is a {{ $item }} page</h1>

    {{-- <a class="twitter-timeline" href="https://twitter.com/DavisCup?ref_src=twsrc%5Etfw">Tweets by DavisCup</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script> --}}
    
    <p class="tweet-cont">{{ $twitter[0]['created_at'] }}</p>
    <p>{{ $twitter[0]['text'] }}</p>
    <img src="{{ $twitter[0]['user']['profile_image_url_https'] }}" alt="">

@endsection('content')
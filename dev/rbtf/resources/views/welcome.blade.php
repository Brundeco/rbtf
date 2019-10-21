@extends('layout')

{{-- <script type="text/javascript" src="{!! asset('js/app.min.js') !!}"></script> --}}
@section('title', 'Home page')
    
@section('content')
    <h1>This is a page</h1>

    {{$string}}

    @foreach ($data as $tweet)
       <div class="tweet-cont">
            <p>{{ $tweet['created_at'] }}</p>
            <p>{{ $tweet['text']}}</p>
            <img src="{{ $tweet['user']['profile_banner_url'] }}" alt="">
            <a target="_blank" href="{{ $tweet['user']['url'] }}">{{ '@' . $tweet['user']['screen_name'] }}</a>
        </div>
        <br><br><br>
    @endforeach
    

@endsection('content')
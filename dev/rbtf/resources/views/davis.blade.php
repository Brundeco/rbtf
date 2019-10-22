@extends('layout')

@section('title', 'Davis cup')

@section('content')
    <h1>Davis Cup page</h1>
   
    {{-- {{ $string }} --}}
     @foreach ($data_davis_cup as $tweet)
        <div class="tweet-cont">
            <div class="tweet-id">
                <a href="{{ $tweet['user']['url']}}" target="_blank"><img src="{{ $tweet['user']['profile_image_url'] }}" class="tweet-user-img" alt=""></a>
                <a class="tweet-user" href="{{ $tweet['user']['url']}}" target="_blank">{{ $tweet['user']['screen_name']}}</a>
            </div>
            <a class="link-to-tweet" href="{{ substr($tweet['text'], -23)}}" target="_blank">{{ $tweet['text']}}</a>
            <img src="{{ $tweet['user']['profile_banner_url'] }}" class="tweet-media" alt="">
            <p> Tweeted at {{ date("M j, Y, g:i a",strtotime($tweet['created_at'])) }}</p>
        </div>
        <br><br><br>
    @endforeach

@endsection('content')
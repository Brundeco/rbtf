@extends('layout')

{{-- <script type="text/javascript" src="{!! asset('js/app.min.js') !!}"></script> --}}
@section('title', 'Home page')
    
@section('content')
    <h1>This is a page</h1>
    
    {{ var_dump($twitter) }}
    
    {{-- {{ var_dump($twitter_string) }} --}}
    
    {{-- <div class="tweet-cont">
        <p>{{ $twitter[0]['created_at'] }}</p>
        <p>{{ $twitter[0]['text'] }}</p>
        <img src="{{ $twitter[0]['user']['profile_banner_url'] }}" alt="">
        <a target="_blank" href="{{ $twitter[0]['user']['url'] }}">{{ '@' . $twitter[0]['user']['screen_name'] }}</a>
    </div>  --}}

    @foreach ($twitter as $tweet)
       <div class="tweet-cont">
            <p>{{ $tweet[0]->created_at }}</p>
            <p>{{ $tweet[0]->text}}</p>
            <img src="{{ $tweet[0]->user->profile_banner_url }}" alt="">
            <a target="_blank" href="{{ $tweet[0]->user->url }}">{{ '@' . $tweet[0]->user->screen_name }}</a>
        </div>
    @endforeach
    

@endsection('content')
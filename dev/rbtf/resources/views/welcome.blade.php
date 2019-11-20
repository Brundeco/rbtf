@extends('layout')

{{-- <script type="text/javascript" src="{!! asset('js/app.min.js') !!}"></script> --}}
@section('title', 'Home page')
    
@section('content')

    <h1>This is a page</h1>

<form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="image">
        <input type="submit" value="submit" name="submit">
    <input type="hidden" value="" name="_token">
    </form>


@endsection('content')
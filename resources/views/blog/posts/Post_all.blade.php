@extends('layouts.main')

@section('content')
    <div class="blog-post">
        @if ($item->exists)
            <h1 class="font-weight-bold text-center text-warning">{{$item->title }}</h1>
            <h2 class=" text-center font-weight-light" style="color: #ffc500"> {{$item->excerpt}}</h2>
            <p class="mt-4 text-primary">{{$item->content_raw}}</p>
            <p class="text-center text-white bg-dark ">{{$item->published_at}}</p>
        @endif
    </div>
@endsection

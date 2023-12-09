@extends('layouts.app')

@section('content')
<div class="container mt-2">
    <div class="row pt-5">
            @foreach($posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="img-fluid">
                </a>
            </div>
            @endforeach 
    </div>
</div>
@endsection

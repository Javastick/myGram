@extends('layouts.app')

@section('content')
<div class="container d-flex justify-content-center">
    <div class="row m-3 p-3 shadow rounded">
        <div class="col">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col">
            <div class="d-flex align-items-center">
                <div class="pe-2">
                    <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle" style="max-width: 50px">
                </div>
                <div class="font-weight-bold">
                    <a href="/profile/{{ $post->user->id }}" class="text-dark font-weight-bold">{{ $post->user->username }}</a>
                    <a href="" class="ms-3">Follow</a>
                </div>
            </div>
            <hr>
            <p>
                <span>
                    <a href="/profile/{{ $post->user->id }}" class="text-dark fw-bold">{{ $post->user->username }}</a>
                </span>
                ~{{ $post->caption }}
            </p>
        </div>
    </div>
</div>
@endsection

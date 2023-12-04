@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center">
        
        @foreach ($posts as $post)
            <div class="row d-flex flex-column justify-content-center shadow rounded m-2 w-25">
                <div class="col d-flex flex-column align-items-center justify-content-center">
                    <div class="d-flex align-items-center justify-content-between m-1 w-100">
                        <div class="pe-2">
                            <img src="{{ $post->user->profile->profileImage() }}" class="w-100 rounded-circle m-2"
                                style="max-width: 35px">
                            <a href="/profile/{{ $post->user->id }}" class="text-dark fw-bold">{{ $post->user->username }}</a>
                        </div>
                        {{-- <div class="font-weight-bold">
                            <a href="" class="ms-3 btn btn-primary">Follow</a>
                        </div> --}}
                    </div>
                    <img src="/storage/{{ $post->image }}" alt="" class="w-100">
                </div>
                <div class="col">
                    <hr>
                    <p>
                        <span>
                            <a href="/profile/{{ $post->user->id }}"
                                class="text-dark fw-bold">{{ $post->user->username }}</a>
                        </span>
                        ~{{ $post->caption }}
                    </p>
                </div>
            </div>
        @endforeach
        
    </div>
@endsection

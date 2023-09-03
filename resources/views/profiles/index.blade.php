@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle img-fluid" style="height: 250px; width: 250px;">
        </div>
        <div class="col-9">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center mb-3">
                    <h1>{{ $user->username }}</h1>

                    <follow-button user-id="{{ $user->id }}"></follow-button>
                </div>

                @can('update', $user->profile)
                    <a href="/p/create">Posting baru</a>
                @endcan
            </div>
            @can('update', $user->profile)
                <a href="/profile/{{ $user->id }}/edit">Edit Profil</a>
            @endcan
            <div class="d-flex">
                <div class="pe-3"><strong>{{ $user->posts->count() }}</strong> Post</div>
                <div class="pe-3"><strong>231</strong> Followers</div>
                <div><strong>231</strong> Following</div>
            </div>
            <div class="pt-2"><h4>{{ $user->profile->title }}</h4></div>
            <div>{{ $user->profile->description }}</div>
        </div>
    </div>
    <hr >
    
    <div class="row pt-5">
            @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="" class="img-fluid">
                </a>
            </div>
            @endforeach 
    </div>
</div>
@endsection

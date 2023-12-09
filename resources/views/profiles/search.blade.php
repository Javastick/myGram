@extends('layouts.app')

@section('content')
    <div class="container mt-4 d-flex flex-column justify-content-center align-items-center">
        <form class="d-flex w-75 mb-3" role="search" method="GET">
            <input class="form-control me-2  shadow" type="search" placeholder="Search" name="search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        @if (isset($_GET['search']))
            {{-- @dd($users) --}}
            @foreach ($users as $user)
                <a href="profile/{{ $user->id }}" class="nav-link">
                    <div class="w-75 shadow-sm m-2 rounded row d-flex p-2">
                        <div class="col-2">
                            <img src="/storage/{{ $user->profile->image }}" alt="" class="img-fluid rounded-circle">
                        </div>
                        <div class="col-10">
                            <h4>{{ $user->name }}</h4>
                            <p>{{ $user->username }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        @endif
    </div>
@endsection

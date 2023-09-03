@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
    @csrf
    @method('PATCH')

        <div class="row">
            <div class="row">
                <h1>Edit Profil</h1>
            </div>
            <div class="col-8 offset-2">
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Ubah Foto Profil</label>
                    <img for="image" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" alt="" class="img-fluid rounded-circle" style="width: 200px;">
                    <input type="file" class="form-control-file" name="image" id="image">
        
                    @error('image')
                                <strong>{{ $errors->first('image') }}</strong>           
                    @enderror
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
        
                        <input id="title" 
                        type="text" 
                        class="form-control @error('title') is-invalid @enderror"
                        name="title"
                        value="{{ old('title') ?? $user->profile->title }}" 
                        autocomplete="title"
                        required
                        autofocus>
            
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>           
                            </span>
                        @enderror
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label">Deskripsi</label>
        
                        <input id="description" 
                        type="text" 
                        class="form-control @error('description') is-invalid @enderror"
                        name="description"
                        value="{{ old('description') ?? $user->profile->description }}" 
                        autocomplete="description"
                        required
                        autofocus>
            
                        @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>           
                            </span>
                        @enderror
                </div>
        
                <div class="row mt-4">
                    <button class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection


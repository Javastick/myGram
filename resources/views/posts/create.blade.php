@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <form action="/p" enctype="multipart/form-data" method="post">
    @csrf

        <div class="row">
            <div class="row text-center m-2">
                <h1>Buat Postingan Baru</h1>
            </div>
            <div class="col-8 offset-2">
                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Post Image</label>
                    <img for="image" src="https://mdbootstrap.com/img/Photos/Others/placeholder-avatar.jpg" alt="" class="img-fluid" style="width: 300px;">
                    <input type="file" class="form-control-file" name="image" id="image">
        
                    @error('image')
                                <strong>{{ $errors->first('image') }}</strong>           
                    @enderror
                </div>
                
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">Post Caption</label>
        
                        <input id="caption" 
                        type="text" 
                        class="form-control @error('caption') is-invalid @enderror"
                        name="caption"
                        value="{{ old('caption') }}" 
                        autocomplete="caption"
                        required
                        autofocus>
            
                        @error('caption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('caption') }}</strong>           
                            </span>
                        @enderror
                </div>
        
                <div class="row mt-4">
                    <button class="btn btn-primary">Posting</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection

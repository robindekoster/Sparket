@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="post">
        @csrf

        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Add new item</h1>
                </div>

                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">{{ __('Name') }}</label>

                    <input id="caption"
                           type="text"
                           class="form-control @error('caption') is-invalid @enderror"
                           name="caption"
                           value="{{ old('caption') }}"
                           autocomplete="caption"
                           autofocus>

                    @error('caption')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">{{ __('Post Image') }}</label>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="image">Upload<p/span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image"
                                   aria-describedby="image">
                            <label class="custom-file-label" for="image"></label>
                        </div>
                    </div>

                    @error('image')
                        <strong>{{ $message }}</strong>
                    @enderror
                </div>

                <div class="row pt-5">
                    <button class="btn btn-primary">Add new item</button>
                </div>

            </div>
        </div>
    </form>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
@method 'PATCH'
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit Profile</h1>
                </div>
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Title</label>
                    <input id="title"
                           type="text"
                           class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
                           name="title"
                           value="{{ old('title') ?? $user->profile->title }}"
                           autocomplete="caption" autofocus>

                    @if ($errors->has('title'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('title') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="desciption" class="col-md-4 col-form-label">Description</label>

                    <input id="description"
                           type="text"
                           class="form-control{{ $errors->has('desciption') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ old('desciption') ?? $user->profile->description }}"
                           autocomplete="desciption" autofocus>

                    @if ($errors->has('desciption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('desciption') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label">Url</label>

                    <input id="url"
                           type="text"
                           class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ old('caption') ?? $user->profile->url }}"
                           autocomplete="caption" autofocus>

                    @if ($errors->has('url'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('url') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="row">
                    <label for="image" class="col-md-4 col-form-label">Profile Image</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @if ($errors->has('image'))
                        <strong>{{ $errors->first('image') }}</strong>
                    @endif
                </div>

                <div class="row pt-4">
                    <button class="btn btn-primary">Save</button>
                </div>
@endsection

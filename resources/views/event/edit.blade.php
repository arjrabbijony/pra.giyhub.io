@extends('layouts.app')

@section('content')
<div class="container"  style="margin-top:50px;margin-bottom: 100px;">
    <form action="/c/{{ $user->id }}" enctype="multipart/form-data" method="post">
        @csrf
@method ('PATCH')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h1>Edit event</h1>
                </div>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label">caption</label>
                    <input id="caption"
                           type="text"
                           class="form-control{{ $errors->has('caption') ? ' is-invalid' : '' }}"
                           name="caption"
                           value="{{ old('caption') ?? $user->event->caption }}"
                           autocomplete="title" autofocus>

                    @if ($errors->has('caption'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('caption') }}</strong>
                        </span>
                    @endif
                </div>


                <div class="row pt-4">
                    <button class="btn btn-primary">Save</button>
                </div>
@endsection

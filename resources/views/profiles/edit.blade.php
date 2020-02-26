@extends('layouts.app')

@section('content')

<div class="container rounded bg-primary p-2 h-100">
<form action='/profile/{{$user->id}}' enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row rounded">
                <div class=" col-8 offset-2">
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Edit profile</label>

                        <input id="title"
                        type="text"
                        class="text-dark w-75 form-control @error('title') is-invalid @enderror"
                        name="title" value="{{ old('title') ?? $user->profile->title }}"
                        autocomplete="title" autofocus>

                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>
                </div>
            </div>
                    <div class="row rounded">
                        <label for="description" class="offset-2 col-md-4 col-form-label">Role</label>
                    <input class='form-control w-75 offset-2' type="text" id="description" name="description" value="{{old('description') ?? $user->profile->description}}">
                    @error('description')
                        <strong class="offset-2">{{ $message }}</strong>
                    @enderror
                </div>

                    <div class="row rounded">
                        <label for="url" class="offset-2 col-md-4 col-form-label">Url</label>
                        <input class='form-control w-75 offset-2' type="text" id="url" name="url" value="{{old('url') ?? $user->profile->url}}" >
                        @error('url')
                                    <strong class="offset-2">{{ $message }}</strong>
                        @enderror
                    </div>
                <div class="row mb-5 rounded ">
                    <label for="image" class="offset-2 col-md-4 col-form-label">Profile image</label>
                    <input type="file" class="offset-2 form-control-file btn btn-dark w-75" id='image' name='image'>
                        @error('image')
                            <strong class="offset-2 mt-1">{{ $message }}</strong>
                        @enderror
                </div>

                <button class="btn btn-success offset-2"> Save changes </button>
        </form>
    </div>



</div>

@endsection

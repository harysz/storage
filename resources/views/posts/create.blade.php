@extends('layouts.app')

@section('content')

<div class="container rounded bg-primary p-1">
    <form action='/p' enctype="multipart/form-data" method="post">
        @csrf
        <div class="row rounded">
            <div class=" col-8 offset-2">
                <div class="form-group row">
                    <label for="title" class="col-md-4 col-form-label">Create a title</label>

                    <input id="title"
                    type="text"
                    class="text-dark w-75 form-control @error('title') is-invalid @enderror"
                    name="title" value="{{ old('title') }}"
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
                    <label for="amount" class="offset-2 col-md-4 col-form-label">Amount</label>
                    <input class='form-control w-75 offset-2' type="number" id="amount" name="amount" >
                </div>
                <div class="row rounded">
                    <label for="provider" class="offset-2 col-md-4 col-form-label">provider</label>
                    <input class='form-control w-75 offset-2' type="text" id="provider" name="provider" >
                </div>
            <div class="row mb-5 rounded ">
                <label for="image" class="offset-2 col-md-4 col-form-label">Image</label>
                <input type="file" class="offset-2 form-control-file btn btn-dark w-75" id='image' name='image'>
                    @error('image')

                        <strong class="offset-2 mt-1">{{ $message }}</strong>
                    @enderror
            </div>

            <button class="btn btn-success offset-2"> Upload</button>
    </form>
</div>

@endsection

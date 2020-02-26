@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8 d-flex">
       <img src="/storage/{{$post->image}}" class="w-100 rounded">
            <div class="col-6 d-flex flex-wrap justify-content-between">
                <a href="/profile/{{$post->user->id}}"><img src="/storage/{{$post->user->profile->image}}" class="w-100 h-100 rounded-circle p-1 btn btn-outline-success" style='max-width:100px; max-height:100px;'alt=""></a>
                <div class=" w-50">
                    <h3 class="text-white bg-primary w-50 rounded">{{$post->user->username}}</h3>
                        @if($post->amount >= 10)
                            <p class="bg-success rounded p-1 text-white"> Ammount : {{$post->amount}}</p>
                        @else
                            <p class="bg-danger rounded p-1 text-white"> Ammount : {{$post->amount}}</p>
                        @endif
                        <div class="form-group">
                        <input type="number" name='value' >

                        </div>
                    <h4 class="bg-info rounded p-1 text-dark"> {{$post->title}}</h4>
                    <h4 class="bg-primary rounded p-1 text-dark"> {{$post->provider}}</h4>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

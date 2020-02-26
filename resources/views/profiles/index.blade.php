@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-3">
    <img src="{{$user->profile->profileImage()}}" class='rounded-circle bg-primary p-3 w-100'>
    </div>
    <div class="col-9">
    <div class="d-flex w-100 bg-secondary justify-content-between p-1 rounded align-items-baseline">
        <h2 class="ml-1 text-capitalize bg-secondary p-1 rounded">{{ $user->username}}</h2>
        <h2 class=" ml-1 align-items-baseline rounded p-1">{{$user->profile->title}}</h2>
        @if($user->profile->description)
        <p class=" ml-1 align-items-baseline rounded p-1">{{$user->profile->description}}</p>
        @endif
    </div>
    @can('update', $user->profile)
    <a href="/p/create" class="btn  align-items-baseline btn-outline-primary">Add new Post</a>
    @endcan
        @can('update', $user->profile)
        <a href="/profile/{{$user->id}}/edit" class="m-1 btn btn-outline-warning">Edit Profile</a>
        @endcan
        <h5 class="mt-1 ml-1 row bg-success col-5 rounded p-1"> Added items : {{$user->posts->count()}}</h5>
       <div class="row pt-2">
           @foreach ($user->posts as $post)
               <div class="col-4 m-1 mb-4">
               <a href="/p/{{$post->id}}" class="btn btn-outline-info mb-2">
                <img src="/storage/{{$post->image}}" class="w-100 h-50 rounded mb-1">
               </a>
              @if ($post->amount >=10)
                <h4 class="bg-info text-center rounded" >Amount : {{$post->amount}}</h4>
              @else
                <h5 class="bg-danger text-center rounded" >Amount : {{$post->amount}}</h5>
              @endif
               <h5 class='bg-light text-center rounded'>{{$post->title}}</h5>
               <h6 class="bg-success text-center rounded">{{$post->provider}}</h6>
               </div>
           @endforeach
       </div>
    </div>
  </div>
</div>
@endsection

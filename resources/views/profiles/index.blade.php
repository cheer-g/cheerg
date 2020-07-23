@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class = "col-3 p-5">
            <img src="/storage/{{$user->profile->image}} " alt="profile-picture" class="rounded-circle w-100" >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>@ {{ $user -> username }}</h1>
                
                @can ('update', $user->profile)
                    <a href="/posts/create">Add new post</a>
                @endcan
            </div>

            @can ('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
            
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>689k</strong> followers</div>
                <div><strong>1304</strong> following</div>
            </div>
            <div>
                <div class="pt-3 font-weight-bold">{{$user->profile->title ?? 'OK'}}</div>
                <div>{{$user->profile->description ?? 'OK'}}</div>
                <div class="font-weight-bold"><a href="{{$user->profile->url}}"> {{$user->profile->url ?? 'This person have no address'}} </a></div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/posts/{{ $post->id}} ">
                    <img src="/storage/{{$post->image}} " alt="error" class="w-100">
                </a>
            </div>  
        @endforeach
    </div>
</div>
@endsection

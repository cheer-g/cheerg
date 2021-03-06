@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class = "col-3 p-5">
            <img src="{{$user->profile->profileImage()}} " alt="profile-picture" class="rounded-circle w-100" >
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <div class="d-flex align-items-center pb-2">
                    <div class="h4">@ {{ $user -> username }}</div>

                <follow-button user-id="{{$user->id}}" follows="{{ $follows }}"></follow-button>
                </div>
                
                @can ('update', $user->profile)
                    <a href="/posts/create">Add new post</a>
                @endcan
            </div>

            @can ('update', $user->profile)
                <a href="/profile/{{$user->id}}/edit">Edit profile</a>
            @endcan
            
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $postsCount }}</strong> posts</div>
                <div class="pr-5"><strong>{{$followersCount}}</strong> followers</div>
                <div><strong>{{$followingCount}}</strong> following</div>
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

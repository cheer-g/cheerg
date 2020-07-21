@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class = "col-3 p-5">
            <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83760159_282548559391210_1384242825352183808_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&_nc_ohc=mI1LkAWEpo4AX-zFW7Z&oh=26fabc810935cc355c590e1c63151efc&oe=5F3B6A84" alt="profile-picture" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9 pt-5">
            <div class="d-flex justify-content-between align-items-baseline">
                <h1>@ {{ $user -> username }}</h1>
                <a href="/posts/create">Add new post</a>
            </div>
            <div class="d-flex">
                <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pr-5"><strong>689k</strong> followers</div>
                <div><strong>1304</strong> following</div>
            </div>
            <div>
                <div class="pt-3 font-weight-bold">{{$user->profile->title}}</div>
                <div>{{$user->profile->description}}</div>
                <div class="font-weight-bold"><a href="{{$user->profile->url}}"> {{$user->profile->url ?? 'This person have no address'}} </a></div>
            </div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4">
                <img src="/storage/{{$post->image}} " alt="error" class="w-100">
            </div>  
        @endforeach
    </div>
</div>
@endsection

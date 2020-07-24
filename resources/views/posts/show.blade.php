@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{$post->image}} " alt="" class="w-100">
        </div>
        <div class="col-4">
            <div>
               <div class="d-flex align-items-center">
                   <div class="pr-3">
                        <img src="{{$post->user->profile->profileImage()}} " alt="{{$post->user->name}}'s dp " class="rounded-circle w-100" style="max-width: 45px;">
                   </div>
                   <div class="d-flex"> 
                        <div class="font-weight-bold pr-1">
                            <a href="/profile/{{$post->user->id}} ">
                                <span class="text-dark">{{$post->user->username}}</span> 
                            </a>
                        </div>•
                        <a href="#" class="pl-1">Follow</a>
                   </div>
               </div>
            </div>
            <hr>
            <p class="pt-2">
                <span class="font-weight-bold pr-2">
                    <a href="/profile/{{$post->user->id}} ">
                        <span class="text-dark">{{$post->user->username}}</span>
                    </a>
                </span>{{$post->caption}} 
            </p>
        </div>
    </div>
</div>
@endsection

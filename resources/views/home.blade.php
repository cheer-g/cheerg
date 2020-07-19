@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class = "col-3 p-5">
            <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-19/s320x320/83760159_282548559391210_1384242825352183808_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&_nc_ohc=mI1LkAWEpo4AX-zFW7Z&oh=26fabc810935cc355c590e1c63151efc&oe=5F3B6A84" alt="profile-picture" class="rounded-circle" style="height: 150px;">
        </div>
        <div class="col-9">
            <div class="pt-5"><h1>@ {{ $user -> username }}</h1></div>
            <div class="d-flex">
                <div class="pr-5"><strong>157</strong> posts</div>
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
        <div class="col-4">
            <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-15/e35/s150x150/85056145_217010229473384_4686196615642217997_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&_nc_cat=108&_nc_ohc=AphJ5wfz080AX-MYM_Y&oh=0517a4805edfee1c5ff34b71a0a743ae&oe=5F3E30D0" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-15/e35/c0.108.864.864a/s150x150/84119479_1014792575561582_7009571403863836109_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&amp;_nc_cat=102&amp;_nc_ohc=uQaoMnOtK-0AX-MqrFl&amp;oh=65396135e5849528c6d6e2c19ccd7f6b&amp;oe=5F3C9607" alt="" class="w-100">
        </div>
        <div class="col-4">
            <img src="https://instagram.fcok1-1.fna.fbcdn.net/v/t51.2885-15/e15/c0.90.720.720a/s150x150/74713599_601340467284995_6321337145317930751_n.jpg?_nc_ht=instagram.fcok1-1.fna.fbcdn.net&amp;_nc_cat=111&amp;_nc_ohc=TVe_-cbg6AQAX_52irK&amp;oh=f2a884b669b9134eeffd9df56786075b&amp;oe=5F3CEE96" alt="" class="w-100">
        </div>
    </div>
</div>
@endsection

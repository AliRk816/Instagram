@extends('layouts.app')

@section('content')
<div class="container p-5">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
        </div>
        <div class="col-9">
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                
                    <div class="d-flex align-items-center mb-4">
                        <div class="h4">{{ $user->username }}</div>
                        <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a href="/profile/{{ $user->id}}/edit" class="mr-4">Edit Profile</a>
                    @endcan
                    

                    @can('update', $user->profile)
                        <a href="/p/create" class="mr-4">Add Post</a>
                    @endcan
                </div>
            </div>
            
            <div class="d-flex ml-3">
                <div class="pr-5" style="font-size:1.1em;"><strong>{{ $postCount }}</strong> posts</div>
                <div class="pr-5" style="font-size:1.1em;"><strong>{{ $followersCount }}</strong> followers</div>
                <div class="pr-5" style="font-size:1.1em;"><strong>{{ $followingsCount }}</strong> following</div>
            </div>
            <div class="pt-4 ml-3 font-weight-bold" style="font-size:1.1em;">{{ $user->profile->name }}</div>
            <div class="ml-3" style="font-size:1.1em;">{{ $user->profile->description }}</div>
            <div class="ml-3"><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <hr>

    <div class="row pt-5">
        @foreach($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id}}">
                    <img src="/storage/{{ $post->image }}" class="w-100">
                </a>
            </div>
        @endforeach

    </div>
</div>
@endsection

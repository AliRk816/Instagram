@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="row col-6 offset-3">
                    <div class="d-flex pr-3 pt-2 pb-4">
                        <img src="storage/{{ $post->user->profile->image }}" class="rounded-circle w-100" style="max-width:40px;">
                        <p>
                            <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}" style="color:black;">{{ $post->user->username }}</a>
                        </p>
                    </div>
                    <a href="/profile/{{ $post->user->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
                </div>
                <div class="row pt-2 pb-4">
                    <div class="col-6 offset-3">
                        <div>
                            <div class="d-flex align-items-center">
                                
                                <div>
                                    <p>
                                        <span class="font-weight-bold">
                                            <a href="/profile/{{ $post->user->id }}" style="color:black;">{{ $post->user->username }}</a>
                                        </span>{{ $post->caption }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <div>
        @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

    </div>
@endsection
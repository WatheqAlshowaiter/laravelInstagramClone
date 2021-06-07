@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3" style="height: 250px">
                <img src="{{ $user->profile->profileImage() }}" alt="profile image"
                    class="p-5 h-100 rounded-circle w-100" />

            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center pb-2">
                        <h2 class="my-0">{{ $user->username }}</h2>
                        <follow-button user-id={{ $user->id }} follows="{{ $follows }}"></follow-button>
                    </div>

                    @can('update', $user->profile)
                        <a href="/p/create">Add New Post</a>
                    @endcan
                    @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit">Edit Profile</a>
                    @endcan
                </div>
                <div class="d-flex">
                    <div class="pr-3"><strong>{{ $postCount }}</strong> posts</div>
                    <div class="pr-3"><strong>{{ $followersCount }}</strong> followers</div>
                    <div class="pr-3"><strong>{{ $followingCount }}</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="{{ $user->profile->url }}" target="_blank" class="font-weight-bold"
                        style="color: #09386B">{{ $user->profile->url }}</a></div>
            </div>
        </div>
        <div class="row pt-5">
            @foreach ($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img alt="post image" class="w-100" src="/storage/{{ $post->image }}"
                            alt="{{ $post->caption }}">
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection

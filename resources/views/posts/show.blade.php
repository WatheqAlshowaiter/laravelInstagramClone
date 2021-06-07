@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-8">
                <img src="/storage/{{ $post->image }}" alt="{{ $post->caption }}" class="w-100">
            </div>
            <div class="col-4">
                <div>
                    <div class="d-flex align-items-center">
                        <div class="pr-4">
                            <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-100 rounded-circle"
                                style="max-width: 50px">
                        </div>
                        <div>
                            <h5 class="font-weight-bold">
                                <a href="/profile/{{ $post->user->id }}">
                                    <span class="text-dark">
                                        {{ $post->user->username }}
                                    </span>
                                </a>
                                <a href="#" class="pl-3" style="font-size:smaller">Follow</a>
                            </h5>
                        </div>
                    </div>
                    <hr>
                    <p>
                        <span class="font-weight-bold">
                            <a href="/profile/{{ $post->user->id }}">
                                <span class="text-dark">
                                    {{ $post->user->username }}
                                </span>
                            </a>
                            {{ $post->caption }}
                        </span>
                    </p>
                </div>
            </div>
        </div>

    </div>


@endsection

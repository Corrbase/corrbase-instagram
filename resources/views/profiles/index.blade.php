@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img src="{{ $user->profile->profileImage() }}" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                        <h1>
                            {{ $user->username }}
                        </h1>

                    <button id="follow_btn" class="btn btn-primary ml-4">
                        Follow
                    </button>
                </div>
                    @can('update', $user->profile)
                        <a href="/p/create">Add new Post</a>
                    @endcan
                @can('update', $user->profile)
                        <a href="/profile/{{ $user->id }}/edit">Edit profile</a>
                @endcan
                <div class="d-flex">
                    <div class="pr-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                    <div class="pr-5"><strong>23k</strong> following</div>
                </div>
                <div class="pt-4 font-weight-bold">{{ $user->profile->title }}</div>
                <div>{{ $user->profile->description }}</div>
                <div><a href="#">{{ $user->profile->url ?? 'N/A'}}</a></div>
            </div>
        </div>

        <div class="row pt-5">

            @foreach($user->posts as $post)
                <div class="col-4 pb-4">
                    <a href="/p/{{ $post->id }}">
                        <img src="/storage/{{ $post->image }}" class="w-100">
                    </a>
                </div>
            @endforeach

        </div>
    </div>
@endsection

@push('custom_scripts')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {

            $('#follow_btn').on('click', function () {

                $.ajax({
                    method: 'post',
                    url: "{{ route('follow') }}",
                    data: {
                        id: "{{ $user->id }}",
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (data) {
                        console.log(data)
                        if (data.success) {
                            console.log("SUCCESS !!!");
                        } else {
                            console.log()(data.data);
                        }
                    }
                });

            });

        });
    </script>
@endpush

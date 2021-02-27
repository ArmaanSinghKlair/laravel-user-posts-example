@extends ('layouts.app')

@section ('content')

<div class="posts-container">
    <div class="post-main-header">
        Posts for {{auth()->user()->name}}
    </div>
    @forelse ($posts as $post)
        <a href="{{route('posts.show',['post_id'=>$post->id])}}">
            <div class="post">
                <div class="post-header">
                    {{ $post->title }}
                </div>
                <p>{{ $post->excerpt }}</p>
            </div>
        </a>
    @empty
        <div class="post">
            <h1>No posts yet :(</h1>
        </div>
    @endforelse
</div>

@endsection
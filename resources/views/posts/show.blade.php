@extends ('layouts.app')

@section ('content')

<div class="posts-container">

    <div class="post-main-header" style="font-weight:bold">
    {{ $post->title}}
    </div>
    <div class="post" style="padding:1vmax;">
        {{$post->body}}
</div>
</div>

@endsection

@section ('back-button')
<a href="{{route('posts.index')}}" class="btn btn-primary" style="color:white !important">Back to posts</a>    
@endsection
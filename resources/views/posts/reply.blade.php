@extends('layouts.app')

@section('content')
<div class="flex justify-center">
    <div class="w-8/12 bg-white  p-6 rounded-lg">
        <h1>Reply Post</h1>

        <form action=" {{route('posts.updateReply',['post' => $post])}} " method="post" class="mb-4">
            @csrf
            <div class="mb-4">
                <p>{{ $post->body}}</p>
                <label for="reply" class="sr-only">Reply</label>
                <textarea name="reply" id="reply" cols="30" rows="5" class="bg-gray-100 border-2 w-full p-4 rounded-lg @error('reply') border-red-500 @enderror" placeholder="Post your Reply!"></textarea>

                @error('reply')
                <div class="text-red-500 mt-2 text-sm">{{ $message }} </div>
                @enderror
            </div>

            <div>
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded font-medium"> Post Reply</button>
            </div>
        </form>

    </div>
</div>

@endsection
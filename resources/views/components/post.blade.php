@props(['post' => $post])

<div class="mb-4 mt-2">
    <a href="" class="font-bold">{{ $post->user->name }}</a>
    <span class="text-gray-600 text-sm"> {{ $post->created_at->diffForHumans() }}</span>
    <p class="mb-2">{{ $post->body}}</p>

</div>
@if ($post->reply)
    <div class="mb-4">
        <p class="text-gray-400">Reply: {{ $post->reply }}</p>
    </div>
@else
    <div class="mb-4">
        
        @if ($post->user_id == auth()->user()->id)

            <a class="text-blue-500" href="">Edit</a> 
        @else
            <a class="text-blue-500" href=""> Reply</a>
        @endif

    </div>
@endif
<hr/>
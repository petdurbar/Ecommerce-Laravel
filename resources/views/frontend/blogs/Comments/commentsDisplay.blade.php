@foreach ($comments as $comment)
<div class=" bg-gray-100 p-5 my-4 ml-8">

    <div class="comment-header flex items-center mb-4">
      
        <strong class="comment-author text-lg font-semibold text-gray-800">{{ $comment->userProfiles ?
            $comment->userProfiles->name : 'Anonymous' }}</strong>
    </div>

    <div class="comment-body mb-4">
        <p class="text-gray-700 leading-relaxed">{{ $comment->body }}</p>
    </div>
    <div class="text-sm text-gray-500">{{ $comment->created_at->format('F j, Y') }}</div>

   
</div>
@endforeach

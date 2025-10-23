
@foreach ($comments as $comment)

    <div class="commented-section mt-2" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
                        <div class="d-flex flex-row align-items-center commented-user">
                            <h5 class="mr-2">Anonymous</h5><span class="dot mb-1"></span><span class="mb-1 ml-2">{{ $comment->created_at->diffForHumans() }}</span></div>
                        <div class="comment-text-sm"><span>
                            {{ $comment->comment }}

                        </span></div>
                        <div
                            class="reply-section">
                            <div class="d-flex flex-row align-items-center voting-icons"><i class="fa fa-sort-up fa-2x mt-3 hit-voting"></i><i class="fa fa-sort-down fa-2x mb-3 hit-voting"></i><span class="ml-2">{{ $comment->replies->count() }}</span><span class="dot ml-2"></span>
                                <div onclick="handleClick({{ $comment->id }});" id={{ "reply".$comment->id }}><h6  class="ml-2 mt-1" style="cursor : pointer" >Reply</h6></div>
                            </div>
                            <div id={{"replies". $comment->id }} style="display: none" class="coment-bottom bg-white p-2 px-4" >
                    <div class="add-comment-section mt-4 mb-4"><form action="{{ route('comments.store') }}" method="post">
                        @csrf()

                        <input type="hidden" name="post_id" value={{ $post_id}}>
                        <input type="hidden" name="parent_id" value={{ $comment->id }}>
                        <input type="hidden" name="user_id" value={{ auth()->user() ? auth()->user()->id : 1 }}>
                        <textarea name="comment" class="form-control mr-3" placeholder="Reply comment"></textarea>
                        <button class="btn btn-primary" type="submit">Reply</button></form></div>
@include('home.comments', ['comments' => $comment->replies])
    </div>
                </div>
            </div>

<script type="text/javascript">
            var id = {{ $comment->id }}

      function handleClick(id) {
          document
            .getElementById('replies'+id)
            .setAttribute('style', 'display: block');

      }
    </script>


            @endforeach

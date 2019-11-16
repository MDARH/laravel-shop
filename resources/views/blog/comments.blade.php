@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <div class="comment-list">
            <div class="single-comment justify-content-between d-flex">
                <div class="user justify-content-between d-flex">
                    <div class="thumb">
                        <img src="{{Helper::get_gravatar($comment->user->email)}}" alt="{{$comment->user->name}}">
                    </div>
                    <div class="desc">
                        <p class="comment">
                            {{ $comment->body }}
                        </p>

                        <div class="d-flex justify-content-between">
                            <div class="d-flex align-items-center">
                                <h5>
                                    <a href="#">{{ $comment->user->name }}</a>
                                </h5>
                                <p class="date">{{date_format($comment->updated_at,"F D, Y")}} at {{date_format($comment->updated_at,"g:i a")}}</p>

                            </div>

                            <div class="reply-btn">
                                <a href="#" class="btn-reply reply text-uppercase" data-id="{{ $comment->id }}">Reply</a>
                                <a href="#" class="btn-reply cancel text-uppercase" style="display: none;">Cancel</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        @include('blog.comments', ['comments' => $comment->replies])
    </div>
@endforeach
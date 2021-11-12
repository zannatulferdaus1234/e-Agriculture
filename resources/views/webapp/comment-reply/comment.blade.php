@forelse ($content->comment as $comments)
    <li class="comment">
        <div class="user-thumb"> <img src="{{ $comments->end_user->avatar }}" alt=""></div>
        <div class="comment-txt">

            <h6>{{ $comments->end_user->name }}</h6>
            <p style="font-size:1rem">{{ $comments->details }}</p>
            <ul class="comment-time">
                <li>Posted : {{ $comments->created_at->format('d M Y, D') }}</li>
                <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
            </ul>

        </div>

        <ul class="children">
            <!--Reply Start-->
            @includeIf('webapp.comment-reply.reply')
            <!--Reply End-->
        </ul>

    </li>
    <!--Comment End-->

@empty

    <h6 class="comment">No Comments</h6>

@endforelse

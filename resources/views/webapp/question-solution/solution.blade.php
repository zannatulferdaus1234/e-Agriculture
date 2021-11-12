@forelse ($question->solution as $solution)
    <li class="comment">

        <div class="user-thumb"> <img src="{{ $question->end_user->avatar }}" alt=""></div>
        <div class="comment-txt">
            <h6>{{ $solution->user->name }}</h6>
            <p style="font-size:1rem">{{ $solution->details }}</p>
            <ul class="comment-time">
                <li>Posted: {{ $solution->created_at->format('d M Y, D') }}</li>
                <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
            </ul>
        </div>
    </li>
@empty
@endforelse

@forelse ($sub_category->question as $question)
    <li class="comment">
        <div class="user-thumb"> <img src="{{ $question->end_user->avatar }}" alt=""></div>
        <div class="comment-txt">
            <h6>{{ $question->end_user->name }}</h6>
            <h6 class="text-success ">{{ ucfirst($question->title) }}</h6>
            <p style="font-size:1rem">{{ $question->details }}</p>
            <ul class="comment-time">
                <li>Posted: {{ $question->created_at->format('d M Y, D') }}</li>
                <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
            </ul>
        </div>
        <ul class="children">
            <!--Comment Start-->
            @includeIf('webapp.question-solution.solution')

            <!--Comment End-->

        </ul>

    </li>
    <!--Comment End-->

@empty

    <h6 class="comment">No Questions yet...</h6>

@endforelse

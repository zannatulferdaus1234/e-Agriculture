@extends('webapp.layout.main-layout')

@section('content')

    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Questions</h1>
            <ul>
                <li><a href="{{ route('webapp') }}">Home</a></li>
                <li><a href="javascript:avoid(0)"> Question </a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->
    <!--Blog Start-->
    <section class="wf100 p80 blog">
        <div class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12">
                        <a class=" btn btn-success btn-block text-light mb-4" href="{{ route('ask-question') }}">Post Your
                            Question</a>

                        @foreach ($questions as $question)

                            <div class="author-box wf100">
                                <ul class="comments">

                                    <li class="comment">

                                        <div class="user-thumb"> <img src="{{ $question->end_user->avatar }}" alt="">
                                        </div>
                                        <div class="comment-txt2">
                                            <h6>{{ $question->end_user->name }} </h6>
                                            <h6 class="text-success">{{ $question->title }}</h6>
                                            <ul class="comment-time">
                                                <li>Posted: {{ $question->created_at->format('d M, Y h:i A') }}</li>
                                                {{-- <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li> --}}
                                            </ul>
                                        </div>
                                        <a class="btn btn-outline-success btn-sm float-right px-4"
                                            href="{{ route('single_question', $question->id) }}">See More</a>


                                        <ul class="children pt-5">
                                            <!--Comment Start-->
                                            @foreach ($question->solution as $solution)
                                                <li class="comment">
                                                    <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                                                    <div class="comment-txt2">
                                                        <h6> Johny Elite </h6>
                                                        <p style="font-size:1rem">{{ $solution->details }} </p>
                                                        <ul class="comment-time">
                                                            <li>Posted: {{ $solution->created_at->format('d M, Y') }} at
                                                                {{ $solution->created_at->format('h:i A') }}</li>
                                                            <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            @endforeach


                                        </ul>
                                    </li>
                                </ul>

                            </div>

                        @endforeach


                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">
                {{ $questions->links('webapp.pagination.pagination') }}
            </div>
        </div>

    </section>


@endsection

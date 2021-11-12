@extends('webapp.layout.main-layout')

@section('content')

    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Questions</h1>
            <ul>
                <li><a href="{{ route('webapp') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">{{ $question->end_user->name }}'s Question </a></li>
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

                        <div class="author-box wf100">
                            <ul class="comments">

                                <li class="comment">

                                    <div class="user-thumb"> <img src="{{ $question->end_user->avatar }}" alt=""></div>
                                    <div class="comment-txt2">
                                        <h6>{{ ucfirst($question->end_user->name) }} </h6>
                                        <h6 class="text-success">{{ ucfirst($question->title) }}</h6>
                                        <p style="font-size:1rem">{{ ucfirst($question->details) }}</p>

                                        <ul class="comment-time">
                                            <li>Posted: {{ $question->created_at->format('d M, Y h:i A') }}</li>
                                            {{-- <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li> --}}
                                        </ul>
                                    </div>
                            </ul>
                            </li>
                            </ul>

                            <div class="blog-single-thumb ">
                                <img class=" rounded mr-5 float-right img-thumbnail" style="width:50rem;height:20rem"
                                    src="{{ URL::to('/storage/' . $question->image) }}" alt="content-image">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>

    </section>

@endsection

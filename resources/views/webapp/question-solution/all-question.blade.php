{{-- Hello
@foreach ($question as $question)
<p>{{ $question->details}}</p>
@endforeach  --}}


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
                    <a class=" btn btn-success btn-block text-light mb-4" href="{{ route('ask-question')}}">Post Your Question</a>

                    @foreach ($question as $question)

                    <div class="author-box wf100">
                        <ul class="comments">

                            <li class="comment">

                              <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                              <div class="comment-txt2">
                                 <h6> Mason Gray </h6>
                                 <p>{{$question->title}}</p>
                                 <ul class="comment-time">
                                    <li>Posted: {{ $question->created_at->format('d M, Y h:i A') }}</li>
                                    <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                 </ul>
                              </div>
                              <a class="btn btn-outline-success btn-sm float-right px-4" href="{{ route('ask-question')}}">See More</a>


                              <ul class="children pt-5">
                                 <!--Comment Start-->
                                 @foreach ($question->solution as $solution)
                                 <li class="comment">
                                    <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                                    <div class="comment-txt2">
                                       <h6> Johny Elite </h6>
                                       <p>{{ $solution->details}} </p>
                                       <ul class="comment-time">
                                        <li>Posted: {{ $solution->created_at->format('d M, Y') }} at {{ $solution->created_at->format('h:i A') }}</li>
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
    </div>
</section>


@endsection

@extends('webapp.layout.main-layout')

@section('content')
    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            @if ($sub_category->name)
                <h1>{{ ucfirst($sub_category->name) }}</h1>
            @else
                <h1>No Content Added Yet!!!</h1>
            @endif

            <ul>
                <li><a href="{{ route('webapp') }}">Home</a></li>
                @if ($sub_category->name)
                    <li><a href="javascript:avoid(0)"> {{ ucfirst($sub_category->name) }} </a></li>
                @else
                @endif
            </ul>
        </div>
    </section>
    <!--Inner Header End-->

    <!--Blog Start-->
    <section class="wf100 p80 blog">
        <div class="blog-grid-medium">
            <div class="container">
                <div class="row">
                    @forelse ($sub_category->content as $content)

                        <div class="col-md-4 col-sm-6">
                            <div class="blog-post">
                                <div class="blog-thumb" style="height:12rem;">
                                    <a href="{{ route('single_content', [$content->sub_category->name, $content->id]) }}"><i
                                            class="fas fa-search"></i></a>
                                    <img src="{{ URL::to('/storage/' . $content->image) }}" alt="content-image">
                                </div>
                                <div class="post-txt">
                                    <h5><a
                                            href="{{ route('single_content', [$content->sub_category->name, $content->id]) }}">{{ Str::limit(ucfirst($content->title), 15) }}</a>
                                    </h5>
                                    <ul class="post-meta">
                                        <li> <a href="#"><i class="fas fa-calendar-alt"></i>
                                                {{ $content->created_at->format('d M Y, D') }}</a> </li>
                                        <li> <a href="#"><i class="fas fa-comments"></i> {{ count($content->comment) }}
                                                Comments</a> </li>
                                    </ul>
                                    <p>{{ Str::limit(ucfirst($content->details), 100) }}</p>
                                    <a href="{{ route('single_content', [$content->sub_category->name, $content->id]) }}"
                                        class="read-post">Read Post</a>
                                </div>
                            </div>
                        </div>

                    @empty
                        <h5>Sorry! No related items...</h5>
                    @endforelse
                </div>

                {{-- <div class="d-flex justify-content-center">
                    {{ $sub_category->content->onEachSide(1)->links('webapp.pagination.pagination') }}
                </div> --}}


                <div class="post-comments wf100 mt-5">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <h4>Questions for {{ $sub_category->name }}</h4>
                        @auth('end_user')
                            <a class=" btn btn-primary text-light" href="{{ route('ask-question') }}">Post Your Question</a>
                        @else
                            <h4><a href="{{ route('userLogin') }} ">Please Login to make a question</a></h4>
                        @endauth
                    </div>

                    <ul class="comments">
                        <!--show Question Start-->
                        @includeIf('webapp.question-solution.question')
                        <!--show Question End-->
                    </ul>
                </div>

                <!--Question Asking  Start-->
                <div class="wf100 comment-form"><br><br>
                    @auth('end_user')
                        <h4>Ask Any Question...</h4>
                        <ul>
                            <li class="full">
                                <a class=" btn post-btn text-light" href="{{ route('ask-question') }}">Post Your Question
                                    here</a>
                            </li>
                        </ul>
                    @else
                        <h4><a href="{{ route('userLogin') }} ">Please Login to make a question</a></h4>
                    @endauth
                </div>
                <!--Question Asking End-->

            </div>
        </div>
    </section>
    <!--Blog  End-->



@endsection

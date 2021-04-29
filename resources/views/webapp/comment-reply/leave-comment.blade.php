@extends('webapp.layout.layout2')

@section('content')
  <!--Inner Header Start-->
  <section class="wf100 p100 inner-header">
    <div class="container">
       <h1>{{ Str::limit($content->title, 40) }}</h1>
       <ul>
          <li><a href="{{ route('webapp') }}">Home</a></li>
          <li><a href="{{route('all-content',$content->sub_category->name) }}"> {{$content->sub_category->name}} </a></li>
       </ul>
    </div>
 </section>
 <!--Inner Header End-->
 <!--Blog Start-->
 <section class="wf100 p80 blog">
    <div class="blog-details">
       <div class="container">
          <div class="row">
             <div class="col-lg-9 col-md-8">
                <!--Blog Single Content Start-->
                <div class="blog-single-content">
                   <div class="blog-single-thumb"><img src="{{URL::to('/storage/'.$content->image)}}" alt="content-image"></div>
                   <h3>{{$content->title}}</h3>
                   <ul class="post-meta">
                      <li><i class="fas fa-calendar-alt"></i>{{$content->created_at->format('d M Y, D')}}</li>
                      <li><i class="fas fa-comments"></i>{{count($content->comment)}} Comments</li>
                      <li class="tags"><i class="fas fa-tags"></i> <a href="#">{{$content->sub_category->name}}</a> </li>
                   </ul>
                   <p>{{$content->details}}</p>


                   <!--Leave a Comment Start-->

                   <div class="wf100 comment-form">
                       @auth('end_user')
                            <h4 class="px-3">Leave a Comment</h4>
                            <form action="{{ route('storeComment',$content->id) }}" method="POST">
                                @csrf
                                <ul class="row">

                                    <div class="col-md-12">
                                        <div class="input-group">
                                           <input type="hidden" readonly class="form-control" name="content_id" value="{{$content->id}}" rows="5"  >
                                        </div>
                                        @error('content_id')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <div class="input-group">
                                           <textarea type="text" class="form-control" placeholder="Write Comment..." name="details" value="" rows="5"  autofocus autocomplete="details" >{{old('details')}}</textarea>
                                        </div>
                                        @error('details')
                                        <p class="text-danger">{{$message}}</p>
                                        @enderror
                                    </div>


                                    <div class="col-md-12 mt-3">
                                        <button class="post-btn">Post Your Comment</button>
                                    </div>
                                </ul>
                                </form>


                            </div>
                        @else
                            <h4><a href="{{ route('userLogin')}} ">Please Login to make a comment</a></h4>
                       @endauth

                   </div>
                   <!--Leave a Comment End-->

                </div>
                <!--Blog Single Content End-->
             </div>

          </div>
       </div>
    </div>
 </section>
 <!--Blog End-->

@endsection

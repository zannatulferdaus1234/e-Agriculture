@extends('webapp.layout.main-layout')

@section('content')

<section class="wf100 p100 inner-header">
    <div class="container">
       <h1>{{ $categories->name}}</h1>
       <ul>
          <li><a href="{{ route('webapp') }}">Home</a></li>
          <li><a href="javascript:avoid(0)"> {{ $categories->name}} </a></li>
       </ul>
    </div>
 </section>
 <!--Inner Header End-->
 <!--Blog Start-->
 <section class="wf100 p80 blog">
    <div class="blog-large">
       <div class="container">
          <div class="row">
             <!--Blog Small Post Start-->

             @forelse ($categories->sub_category as $sub_category)
             <div class="col-md-6 col-sm-6">
                 <a href="{{ route('all-content',$sub_category->name) }}">
                <div class="blog-post">

                    <div class="blog-thumb">
                        <img src="{{ asset('/storage/'.$sub_category->image)}}" alt="category-image">
                    </div>
                    <div class="post-txt">
                        <ul class="post-meta">
                            <li> <a href="#"><i class="fas fa-calendar-alt"></i>{{ $sub_category->created_at}}</a> </li>
                            <li> <a href="#"><i class="fas fa-comments"></i> 134 Comments</a> </li>
                        </ul>
                        <h5><a href="#">{{ $sub_category->name}} </a></h5>
                    </div>

                </div>
                </a>
             </div>
             @empty
             <h5>Sorry! No related items...</h5>
            @endforelse
             <!--Blog Small Post End-->
          </div>
          <div class="gt-pagination">
             <nav>
                <ul class="pagination">
                   <li class="page-item"> <a class="page-link" href="#" aria-label="Previous"> <i class="fas fa-angle-left"></i> </a> </li>
                   <li class="page-item"><a class="page-link" href="#">1</a></li>
                   <li class="page-item active"><a class="page-link" href="#">2</a></li>
                   <li class="page-item"><a class="page-link" href="#">3</a></li>
                   <li class="page-item"> <a class="page-link" href="#" aria-label="Next"> <i class="fas fa-angle-right"></i> </a> </li>
                </ul>
             </nav>
          </div>
       </div>
    </div>
 </section>

 @endsection

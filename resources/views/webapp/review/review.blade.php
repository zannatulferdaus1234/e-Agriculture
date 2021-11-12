
@extends('webapp.layout.main-layout')

@section('content')

<section class="wf100 p100 inner-header">
    <div class="container">
        <h1>Reviews</h1>
        <ul>
            <li><a href="{{ route('webapp') }}">Home</a></li>
            <li><a href="javascript:avoid(0)"> Reviews </a></li>
        </ul>
    </div>
</section>


 <section class="testimonials-section wf100 p80">
    <h1 class="text-center">What People Says</h1>
    <div class="container">
        <div class="row">
           <div class="col-md-12">
              <div id="testimonials" class="owl-carousel owl-theme">

                 @forelse($reviews as $reviews)
                 <div class="item">
                    <p>{{ $reviews->review}}</p>
                    <div class="tuser"> <img src="{{ $reviews->end_user->avatar }}" alt=""> <strong>{{ $reviews->end_user->name }}</strong> Florida Partner </div>
                 </div>
                 @empty
                 @endforelse

                 <!--testimonials box End-->
              </div>
           </div>
        </div>
     </div>
 </section>



@endsection

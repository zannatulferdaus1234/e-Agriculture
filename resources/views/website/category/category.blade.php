
@extends('website.layouts.layout')

@section('content')


    <!-- subcategory details -->

<div class="p-5">
    <h1 class="text-center text-success">Name: {{ucfirst($sub_category->name)}}</h1>

    <!-- image slider -->
    <div id="hero">
        <div id="owl-main" class="owl-carousel owl-inner-nav owl-ui-sm">

            @forelse($sub_category->crops_image as $crops_image)
            <div class="item" >
                <img src="{{URL::to('/storage/'.$crops_image->crops_image)}}" height="400" width="700">
            </div>

            @empty
            <div class="item" >
                <p class="my-5 text-danger">No Image Inserted Yet !!! </p>
            </div>
            @endforelse

        </div>
      </div>

    <h3 class="mt-5">Index:</h3> <p>{{$sub_category->index}}</p>
    <h3 class="mt-5">Lifespan:</h3> <p>{{$sub_category->lifespan}}</p>
    <h3 class="mt-5">Breed_innovation:</h3> <p>{{$sub_category->breed_innovation}}</p>
    <h3 class="mt-5">Land_selection:</h3> <p>{{$sub_category->land_selection}}</p>
    <h3 class="mt-5">Seed_picking:</h3> <p>{{$sub_category->seed_picking}}</p>
    <h3 class="mt-5">Seedbed_preparation:</h3> <p>{{$sub_category->seedbed_preparation}}</p>
    <h3 class="mt-5">Seedbed_care:</h3> <p>{{$sub_category->seedbed_care}}</p>
    <h3 class="mt-5">Land_preparation:</h3> <p>{{$sub_category->land_preparation}}</p>
    <h3 class="mt-5">Planting_distance:</h3> <p>{{$sub_category->planting_distance}}</p>
    <h3 class="mt-5">Seedlings:</h3> <p>{{$sub_category->seedlings}}</p>
    <h3 class="mt-5">Weed_control:</h3> <p>{{$sub_category->weed_control}}</p>
    <h3 class="mt-5">Fertilizer:</h3> <p>{{$sub_category->fertilizer}}</p>
    <h3 class="mt-5">Irrigation:</h3> <p>{{$sub_category->irrigation}}</p>
    <h3 class="mt-5">Pest:</h3> <p>{{$sub_category->pest}}</p>
    <h3 class="mt-5">Insect:</h3> <p>{{$sub_category->insect}}</p>
    <h3 class="mt-5">Disease:</h3> <p>{{$sub_category->disease}}</p>
    <h3 class="mt-5">Harvesting:</h3> <p>{{$sub_category->harvesting}}</p>
    <h3 class="mt-5">Yield:</h3> <p>{{$sub_category->yield}}</p>

</div>


    <!--Question title -->
    <div class="mt-5 col-md-12">
        <h4 class="text-warning col-md-6">Questions for {{ucfirst($sub_category->name)}}</h4>
        <div class="col-md-6 text-right"> <a href="{{ route('ask-question')}}" class="btn btn-primary">Ask question</a></div>
    </div>
    <div class="col-md-12">
        @forelse($sub_category->crops_question as $crops_question)
            <h3><a href="{{ route('show-questions',[$crops_question->sub_category->id,$crops_question->id]) }} ">{{ $crops_question->title }}</a></h3>
            <hr>
        @empty <p class="text-warning b">Sorry No question posted yet...</p>
        @endforelse
    </div>






@endsection







@extends('website.layouts.layout')

@section('content')

{{-- Question & Solutions Details --}}
<div class="p-5">
    <h2>Question:</h2>

        <h3> <span class="text-info">Title:</span> {{ $crops_question->title }}</h3>
        <p class="text-muted"><span class="text-info">Posted By </span>{{ $crops_question->user->name }} </p>
        <p><span class="text-info">Crop Grain: </span> {{ $crops_question->grain_varieties }}</p>
        <p><span class="text-info">Soli Type: </span>{{ $crops_question->soil_type }}</p>
        <p class=""><span class="text-info">Details: </span>{{ $crops_question->details }}</p>
        @if($crops_question->image)
        <img src="{{URL::to('/storage/'.$crops_question->image)}}" height="200" width="700">
        @else
        <p>No imGE</p>
        @endif


        <h3 class="">Solutions:</h3>
        {{-- @foreach($crops_question->crops_solution as $solution)
            <p>{{ $solution->title}}</p>
        @endforeach --}}


</div>

@endsection

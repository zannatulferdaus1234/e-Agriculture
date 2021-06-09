
@extends('website.layouts.layout')

@section('content')

{{-- Question & Solutions Details --}}
<div class="p-5">
    <h2>Questions:</h2>

    @foreach($question as $question)

        <h3> <span class="text-info">Title:</span> {{ $question->title }}</h3>
        <p class="text-muted"><span class="text-info">Posted By </span>{{ $question->user->name }} </p>
        <p><span class="text-info">Crop Grain: </span> {{ $question->grain_varieties }}</p>
        <p><span class="text-info">Soli Type: </span>{{ $question->soil_type }}</p>
        <p class=""><span class="text-info">Details: </span>{{ $question->details }}</p>
        @if($question->image)
        <img src="{{URL::to('/storage/'.$question->image)}}" height="200" width="700">
        @else
        <p>No imGE</p>
        @endif
        <hr>

        <h2>Solutions:</h2>

        @forelse($question->crops_solution as $solution)

        <p>{{ $solution->details }}</p>


        @empty <p>No solution</p>
        @endforelse


    @endforeach


</div>

@endsection

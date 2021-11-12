@extends('livewire.layout')

@section('content')

<button wire:click="increment">+</button>

<h1>{{ $count }}</h1>
    {{-- <form method="POST" action="{{ route('store-question') }}" enctype="multipart/form-data">

        @csrf


        <div class="form-group">
            <label for="category">category</label>
            <select wire:model="selectedCategory" class="form-control">
                <option value="0" selected disabled>--Select Category--</option>

                @foreach ($category as $category)
                    <option value="{{ $category->id }}">{{ ucwords($category->name) }}</option>
                @endforeach
            </select>
{{$selectedCategory}}
        </div> --}}


{{--
            <div class="form-group">
                <label for="sub_category">sub_category</label>
                <select class="form-control" wire:model="selectedSubCategory">
                    <option value="0" selected disabled>--Select sub_category--</option>

                    @foreach ($sub_category as $sub_category)
                        <option value="{{ $sub_category->id }}">{{ ucwords($sub_category->name) }}</option>
                    @endforeach
                </select>
            </div> --}}



    @endsection

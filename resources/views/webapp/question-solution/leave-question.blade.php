@extends('webapp.layout.layout2')

@section('content')
    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Ask Your Question</h1>
            <ul>
                <li><a href="{{ route('webapp') }}">Home</a></li>
                <li><a href="">Ask Question</a></li>
            </ul>
        </div>
    </section>

    <section class="wf100 p80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="myaccount-form">

                        <div class="d-flex justify-content-between align-items-baseline">
                            <h3>Ask Your Question</h3>

                            <a class=" btn btn-success text-light float-right" href="{{ url()->previous() }}">Back to the
                                previous page</a>
                        </div>

                        <form method="POST" action="{{ route('store-question') }}" enctype="multipart/form-data">
                            @csrf
                            <ul class="row">


                                <li class="col-md-6">
                                    <div class="input-group">
                                        <select class="form-control" name="sub_category_id" id="subcategory">
                                            <option value="0" selected disabled>--Select Category--</option>

                                            @foreach ($sub_category as $sub_category)
                                                <option value="{{ $sub_category->id }}">{{ ucwords($sub_category->name) }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    @error('sub_category_id')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </li>

                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="grain" id="grain"
                                            placeholder="Enter Crops Grain">
                                    </div>
                                    @error('grain')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </li>

                                <li class="col-md-6">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="soil_type" id="soil_type"
                                            placeholder="Enter Soil Type">
                                    </div>
                                    @error('soil_type')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </li>

                                <li class="col-md-12">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" rows="3" name="title" id="title"
                                            placeholder="Enter Title..."></textarea>
                                    </div>
                                    @error('title')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </li>

                                <li class="col-md-12">
                                    <div class="input-group">
                                        <textarea type="text" class="form-control" rows="5" name="details" id="details"
                                            placeholder="Enter Details..."></textarea>
                                    </div>
                                    @error('details')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </li>

                                <div class="col-md-12">
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="image" id="image">
                                    </div>
                                    @error('image')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>

                                <li class="col-md-12">
                                    <button class="register">Post Your Question</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection

@extends('admin.layouts.layout')

@section('content')

    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">SubCategory</a></li>
                <li><a href="javascript:avoid(0)">Add SubCategory</a></li>

            </ul>
        </div>
    </div>

    <div class="row animated fadeInUp">
        <div class="row">
            <!--HORIZONTAL--><br>
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <div class="panel b-primary bt-md">
                        <div class="panel-content">
                            <div class="row mb-xlg">
                                <div class="col-md-6 text-success"><h2>Create SubCategory</h2></div>
                                <div class="col-md-6 text-right">
                                    <a  class="btn btn-primary" href="{{ route('manage-sub_category') }}">All SubCategory</a>
                                </div>
                            </div>
                            <div class="row text-md">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="POST" action="{{route('store-sub_category')}}" enctype="multipart/form-data">
                                        @csrf

                                        <div class="form-group col-md-6">
                                            <label for="category" class="col-sm-4 control-label">Select category<span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <select class="form-control" id="category" name="category_id" >
                                                    @foreach($category as $category)
                                                    <option value="{{$category->id }}">{{ ucwords($category->name)}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="name" class="col-sm-4 control-label">SubCategory Name
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" name="name" >
                                                @error('name')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="index" class="col-sm-4 control-label">Index
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="index" placeholder="Write a index" name="index"></textarea>
                                                @error('index')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="lifespan" class="col-sm-4 control-label">Lifespan
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="lifespan" placeholder="Write a index"  name="lifespan"></textarea>
                                                @error('lifespan')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="breed" class="col-sm-4 control-label">Breed innovation
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="breed" placeholder="Write a index" name="breed_innovation"></textarea>
                                                @error('breed_innovation')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="land" class="col-sm-4 control-label">Land selection
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="land" placeholder="Write a index" name="land_selection"></textarea>
                                                @error('land_selection')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="seed_picking" class="col-sm-4 control-label">Seed picking and germination
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="seed_picking" placeholder="Write a index"  name="seed_picking"></textarea>
                                                @error('seed_picking')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="seedbed_preparation" class="col-sm-4 control-label">Seedbed preparation and fertilizer
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="seedbed_preparation" placeholder="Write a index" name="seedbed_preparation"></textarea>
                                                @error('seedbed_preparation')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="seedbed_care" class="col-sm-4 control-label">Seedbed care
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="seedbed_care" placeholder="Write a index"  name="seedbed_care"></textarea>
                                                @error('seedbed_care')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="land_preparation" class="col-sm-4 control-label">
                                                Land preparation primary fertilizer<span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="land_preparation" placeholder="Write a index" name="land_preparation"></textarea>
                                                @error('land_preparation')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="planting_distance" class="col-sm-4 control-label">Planting distance
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="planting_distance" placeholder="Write a index"  name="planting_distance"></textarea>
                                                @error('planting_distance')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="seedlings" class="col-sm-4 control-label"> Number of seedlings
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="seedlings" placeholder="Write a index" name="seedlings"></textarea>
                                                @error('seedlings')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="weed_control" class="col-sm-4 control-label"> Tree clearing and weed control
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="weed_control" placeholder="Write a index" name="weed_control"></textarea>
                                                @error('weed_control')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="fertilizer" class="col-sm-4 control-label">Fertilizer application
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="fertilizer" placeholder="Write a index" name="fertilizer"></textarea>
                                                @error('fertilizer')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="irrigation" class="col-sm-4 control-label">Supplementary irrigation
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="irrigation" placeholder="Write a index"  name="irrigation"></textarea>
                                                @error('irrigation')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="pest" class="col-sm-4 control-label">Pest management
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="pest" placeholder="Write a index" name="pest"></textarea>
                                                @error('pest')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="insect" class="col-sm-4 control-label"> Insect control
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="insect" placeholder="Write a index" name="insect"></textarea>
                                                @error('insect')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="disease" class="col-sm-4 control-label"> Disease control
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="disease" placeholder="Write a index" name="disease"></textarea>
                                                @error('disease')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="harvesting" class="col-sm-4 control-label">Harvesting
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="harvesting" placeholder="Write a index" name="harvesting"></textarea>
                                                @error('harvesting')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="yield" class="col-sm-4 control-label">Crop Yield
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="yield" placeholder="Write a index" name="yield"></textarea>
                                                @error('yield')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="images" class="col-sm-4 control-label">Images
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" id="images" name="images" >
                                                @error('images')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group mt-xlg">
                                            <button type="submit" class="btn btn-primary btn-block ">Save SubCategory</button>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
@endsection

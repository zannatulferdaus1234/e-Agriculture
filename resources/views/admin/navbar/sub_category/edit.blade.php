@extends('admin.layouts.layout')

<!-- update  subcategory ,for admin -->


@section('content')

    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">SubCategory</a></li>
                <li><a href="javascript:avoid(0)">Update SubCategory</a></li>

            </ul>
        </div>
    </div>

    <div class="row animated fadeInUp">
        <div class="row">
            <br>
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                    <div class="panel b-primary bt-md">
                        <div class="panel-content">
                            <div class="row mb-xlg">
                                <div class="col-md-6 text-success"><h2>Update SubCategory</h2></div>
                                <div class="col-md-6 text-right">
                                    <a  class="btn btn-primary" href="{{ route('manage-sub_category') }}">All SubCategory</a>
                                </div>
                            </div>
                            <div class="row text-md">
                                <div class="col-md-12">
                                    <form class="form-horizontal" method="POST" action="{{route('update-sub_category',$sub_category->id)}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('PATCH')

                                        <div class="form-group col-md-6">
                                            <label for="name" class="col-sm-4 control-label">SubCategory Name
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $sub_category['name'] }}">
                                                @error('name')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="index" class="col-sm-4 control-label">Index
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="index" name="index">{{ $sub_category['index'] }}</textarea>
                                                @error('index')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="lifespan" class="col-sm-4 control-label">Lifespan
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="lifespan" name="lifespan">{{ $sub_category['lifespan'] }}</textarea>
                                                @error('lifespan')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="breed" class="col-sm-4 control-label">Breed innovation
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="breed" name="breed_innovation">{{ $sub_category['breed_innovation'] }}</textarea>
                                                @error('breed_innovation')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="land" class="col-sm-4 control-label">Land selection
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="land" name="land_selection">{{ $sub_category['land_selection'] }}</textarea>
                                                @error('land_selection')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="seed_picking" class="col-sm-4 control-label">Seed picking and germination
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="seed_picking" name="seed_picking">{{ $sub_category['seed_picking'] }}</textarea>
                                                @error('seed_picking')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="seedbed_preparation" class="col-sm-4 control-label">Seedbed preparation and fertilizer
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="seedbed_preparation" name="seedbed_preparation">{{ $sub_category['seedbed_preparation'] }}</textarea>
                                                @error('seedbed_preparation')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="seedbed_care" class="col-sm-4 control-label">Seedbed care
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="seedbed_care" name="seedbed_care">{{ $sub_category['seedbed_care'] }}</textarea>
                                                @error('seedbed_care')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="land_preparation" class="col-sm-4 control-label">
                                                Land preparation primary fertilizer<span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="land_preparation" name="land_preparation">{{ $sub_category['land_preparation'] }}</textarea>
                                                @error('land_preparation')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="planting_distance" class="col-sm-4 control-label">Planting distance
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="planting_distance" name="planting_distance">{{ $sub_category['planting_distance'] }}</textarea>
                                                @error('planting_distance')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="seedlings" class="col-sm-4 control-label"> Number of seedlings
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="seedlings" name="seedlings">{{ $sub_category['seedlings'] }}</textarea>
                                                @error('seedlings')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="weed_control" class="col-sm-4 control-label"> Tree clearing and weed control
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="weed_control" name="weed_control">{{ $sub_category['weed_control'] }}</textarea>
                                                @error('weed_control')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="fertilizer" class="col-sm-4 control-label">Fertilizer application
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="fertilizer" name="fertilizer">{{ $sub_category['fertilizer'] }}</textarea>
                                                @error('fertilizer')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="irrigation" class="col-sm-4 control-label">Supplementary irrigation
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="irrigation" name="irrigation">{{ $sub_category['irrigation'] }}</textarea>
                                                @error('irrigation')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="pest" class="col-sm-4 control-label">Pest management
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="pest" name="pest">{{ $sub_category['pest'] }}</textarea>
                                                @error('pest')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="insect" class="col-sm-4 control-label"> Insect control
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="insect" name="insect">{{ $sub_category['insect'] }}</textarea>
                                                @error('insect')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="disease" class="col-sm-4 control-label"> Disease control
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="disease" name="disease">{{ $sub_category['disease'] }}</textarea>
                                                @error('disease')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="harvesting" class="col-sm-4 control-label">Harvesting
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="harvesting" name="harvesting">{{ $sub_category['harvesting'] }}</textarea>
                                                @error('harvesting')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="yield" class="col-sm-4 control-label">Crop Yield
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <textarea class="form-control" rows="4" id="yield" name="yield">{{ $sub_category['yield'] }}</textarea>
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

                                                Old Image: <img src="{{URL::to('/storage/'.$sub_category->images)}}" style="height:60px; width:80px;">
                                                <input type="hidden" name="old_images" value="{{'storage/'.$sub_category->images}}">

                                                @error('images')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group mt-xlg">
                                            <button type="submit" class="btn btn-primary btn-block ">Update SubCategory</button>
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

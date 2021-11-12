@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Question</a></li>
            <li><a href="javascript:avoid(0)">Update Question</a></li>

        </ul>
    </div>
</div>


<!-- create category ,for admin -->

<div class="row animated fadeInUp">
    <div class="row">
        <br>
        <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6 text-success"><h4>Update Question</h4></div>
                            <div class="col-md-6 text-right">
                            <a  class="btn btn-primary" href="{{ route('manage-crops_question')}}">All Question</a>
                        </div>
                        </div>

                        <div class="row text-md">
                            <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('update-crops_question',$crops_question->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')

                                    <div class="form-group mt-lg">
                                        <label for="sub_category" class="col-sm-3 control-label">Select SubCategory<span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="sub_category" name="sub_category_id">
                                                @foreach($sub_category as $sub_category)
                                                    <option value="{{$sub_category->id }}" {{$sub_category->id== $crops_question->sub_category_id ? 'selected': ''}}>{{ ucwords($sub_category['name'])}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group mt-md">
                                        <label for="grain" class="col-sm-3 control-label">Crops Grain<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="grain" name="grain" value="{{$crops_question['grain']}}" placeholder="Enter Crops Grain">

                                            @error('grain')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="soil_type" class="col-sm-3 control-label">Soil Type<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="soil_type" name="soil_type" value="{{$crops_question['soil_type']}}" placeholder="Enter soil type">

                                            @error('soil_type')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="title" class="col-sm-3 control-label">Title<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" id="title" name="title" placeholder="Write Title..." >{{$crops_question['title']}}</textarea>

                                            @error('title')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="details" class="col-sm-3 control-label">Details<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="4" id="details" name="details" placeholder="Write Details..." >{{$crops_question['details']}}</textarea>
                                            @error('details')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-sm-3 control-label">Image<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="image" name="image">
                                            @error('image')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="image" class="col-sm-3 control-label">Old Image<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <img src="{{URL::to('/storage/'.$crops_question->image)}}" style="height:60px; width:100px;">
                                            <input type="hidden" name="old_image" value="{{'storage/'.$crops_question->image}}">
                                        </div>
                                    </div>


                                    <div class="form-group mt-xlg">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-primary">Update Question</button>
                                        </div>
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

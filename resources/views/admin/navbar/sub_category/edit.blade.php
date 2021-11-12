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

                                        <div class="form-group mt-lg col-md-10">
                                            <label for="category" class="col-sm-3 control-label">Select Category<span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="category" name="category_id">
                                                    @foreach($category as $category)
                                                    <option value="{{$category->id }}" {{$category->id == $sub_category->category_id ? 'selected': ''}}>{{ ucwords($category['name'])}} </option>

                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group col-md-10">
                                            <label for="name" class="col-sm-3 control-label">SubCategory Name
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="name" name="name" value="{{ $sub_category['name'] }}">
                                                @error('name')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group col-md-10">
                                            <label for="image" class="col-sm-3 control-label">Image
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="file" class="form-control" id="image" name="image" >

                                                Old Image: <img src="{{URL::to('/storage/'.$sub_category->image)}}" style="height:60px; width:80px;">
                                                <input type="hidden" name="old_image" value="{{'storage/'.$sub_category->image}}">

                                                @error('image')
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

@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Category</a></li>
            <li><a href="javascript:avoid(0)">Add Category</a></li>

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
                            <div class="col-md-6 text-success"><h4>Create Category</h4></div>
                            <div class="col-md-6 text-right">
                            <a  class="btn btn-primary" href="{{ route('manage-category')}}">All Category</a>
                            </div>
                        </div>

                        <div class="row text-md">
                            <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('store-category')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group ">
                                        <label for="name" class="col-sm-3 control-label">Category Name<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" placeholder="Enter Category">

                                            @error('name')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="image" class="col-sm-3 control-label">Image<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}" >

                                            @error('image')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group mt-xlg">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-primary">Save Category</button>
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

@extends('admin.layouts.layout')


<!-- add subcategory ,for admin -->

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
            <br>
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
                                            <label for="image" class="col-sm-4 control-label">Image
                                                <span class="text-danger">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="file" class="form-control" id="image" name="image" >
                                                @error('image')
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

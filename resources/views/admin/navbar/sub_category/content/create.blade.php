@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Content</a></li>
            <li><a href="javascript:avoid(0)">Add Content</a></li>

        </ul>
    </div>
</div>


<!-- create content  ,for subcategory -->

<div class="row animated fadeInUp">
    <div class="row">
        <br>
        <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6 text-success"><h4>Create Content</h4></div>
                            <div class="col-md-6 text-right">
                            <a  class="btn btn-primary" href="{{ route('manage-content')}}">All Content</a>
                        </div>
                        </div>

                        <div class="row text-md">
                            <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('store-content')}}" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group mt-lg">
                                        <label for="sub_category" class="col-sm-3 control-label">Select SubCategory<span class="text-danger">*</span></label>
                                        <div class="col-sm-6">
                                            <select class="form-control" id="sub_category" name="sub_category_id">
                                                @foreach($sub_category as $sub_category)
                                                    <option value="{{$sub_category->id }}">{{ ucwords($sub_category->name)}} </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="title" class="col-sm-3 control-label">Title<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" id="title" name="title" placeholder="Write Title..." >{{old('title')}}</textarea>

                                            @error('title')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="details" class="col-sm-3 control-label">Details<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="4" id="details" name="details" placeholder="Write Details..." >{{old('details')}}</textarea>
                                            @error('details')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="image" class="col-sm-3 control-label">Image<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="file" class="form-control" id="image" name="image"   >

                                            @error('image')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mt-xlg">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-primary">Save Content</button>
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

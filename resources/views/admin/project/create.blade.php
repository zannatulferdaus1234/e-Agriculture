@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Project</a></li>
            <li><a href="javascript:avoid(0)">Add Project</a></li>

        </ul>
    </div>
</div>


<!-- create project ,for admin -->

<div class="row animated fadeInUp">
    <div class="row">
        <br>
        <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6 text-success"><h4>Create Project</h4></div>
                            <div class="col-md-6 text-right">
                            <a  class="btn btn-primary" href="{{ route('manage-project')}}">All Project</a>
                            </div>
                        </div>

                        <div class="row text-md">
                            <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('store-project')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group ">
                                        <label for="title" class="col-sm-3 control-label">Project Title<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}" placeholder="Enter Project">

                                            @error('title')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="details" class="col-sm-3 control-label">Project Details<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="2" id="details" name="details" placeholder="Write details..." >{{old('details')}}</textarea>

                                            @error('details')
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
                                            <button type="submit" class="btn btn-primary">Save Project</button>
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

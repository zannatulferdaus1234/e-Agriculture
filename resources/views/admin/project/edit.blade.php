@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Project</a></li>
            <li><a href="javascript:avoid(0)">Update Project</a></li>

        </ul>
    </div>
</div>


<!-- update project ,for admin -->
<div class="row animated fadeInUp">
    <div class="row">
        <br>
        <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="panel b-primary bt-md">
                    <div class="panel-content">

                        <div class="row">
                            <div class="col-md-6 text-success"><h4>Update Project</h4></div>
                            <div class="col-md-6 text-right">
                            <a  class="btn btn-primary" href="{{ route('manage-project')}}">All Project</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('update-project',$project->id)}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('PATCH')

                                    <div class="form-group text-md">
                                        <label for="title" class="col-sm-4 control-label">Update Project Title<span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="title" name="title" value="{{$project['title']}}">

                                            @error('title')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group text-md">
                                        <label for="details" class="col-sm-4 control-label">Update Project Details<span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <textarea class="form-control" rows="4" id="details" name="details" placeholder="Write Details..." >{{$project['details']}}</textarea>

                                            @error('details')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group text-md">
                                        <label for="image" class="col-sm-4 control-label">Update Image<span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="file" class="form-control mb-5" id="image" name="image" >

                                            <div class="pt-5">
                                                Old Image: <img src="{{URL::to('/storage/'.$project->image)}}" style="height:60px; width:80px;">
                                            <input type="hidden" name="old_image" value="{{'storage/'.$project->image}}">
                                            </div>

                                            @error('image')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>



                                    <div class="form-group mt-xlg">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-primary">Update Project</button>
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

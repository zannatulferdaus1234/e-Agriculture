@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Counter Category</a></li>
            <li><a href="javascript:avoid(0)">Update Counter Category</a></li>

        </ul>
    </div>
</div>


<!-- update counter category ,for admin -->
<div class="row animated fadeInUp">
    <div class="row">
        <br>
        <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="panel b-primary bt-md">
                    <div class="panel-content">

                        <div class="row">
                            <div class="col-md-6 text-success"><h4>Update Counter Category</h4></div>
                            <div class="col-md-6 text-right">
                            <a  class="btn btn-primary" href="{{ route('manage-counterCategory')}}">All Counter Category</a>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('update-counterCategory',$counterCategory->id)}}" >
                                    @csrf
                                    @method('PATCH')

                                    <div class="form-group text-md">
                                        <label for="title" class="col-sm-4 control-label">Update Counter Title<span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="title" name="title" value="{{$counterCategory['title']}}">

                                            @error('title')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group text-md">
                                        <label for="counter" class="col-sm-4 control-label">Update Counter<span class="text-danger">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" id="counter" name="counter" value="{{$counterCategory['counter']}}">

                                            @error('counter')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>





                                    <div class="form-group mt-xlg">
                                        <div class="col-sm-offset-4 col-sm-4">
                                            <button type="submit" class="btn btn-primary">Update Counter Category</button>
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

@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Comment</a></li>
            <li><a href="javascript:avoid(0)">Update Comment</a></li>

        </ul>
    </div>
</div>


<!-- edit content for subcategory  -->

<div class="row animated fadeInUp">
    <div class="row">
        <br>
        <div class="col-sm-12 col-md-8 col-md-offset-2">
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6 text-success"><h4>Edit Comment</h4></div>
                            <div class="col-md-6 text-right">
                            <a  class="btn btn-primary" href="{{ route('manage-comments')}}">All Comment</a>
                        </div>
                        </div>

                        <div class="row text-md">
                            <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('update-comments',[$content->id,$comment->id])}}" >
                                    @csrf
                                    @method('PATCH')

                                    <div class="form-group ">
                                        <label for="details" class="col-sm-3 control-label">Details<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="4" id="details" name="details" placeholder="Write Details..." >{{$comment['details']}}</textarea>
                                            @error('details')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group mt-xlg">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-primary">Update comment</button>
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

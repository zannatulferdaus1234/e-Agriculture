@extends('admin.layouts.layout')


<!-- Comment for content ,for admin -->
@section('content')

    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">Comments</a></li>
                <li><a href="javascript:avoid(0)">Add Comments to this Content</a></li>

            </ul>
        </div>
    </div>

    <div class="row animated fadeInUp">
        <div class="row">
            <br>
            <div class="col-sm-12 col-md-8 col-md-offset-2">
                    <div class="panel b-primary bt-md">
                        <div class="panel-content">
                            <div class="row mb-xlg">
                                <div class="col-md-6 text-success"><h2>Add Comments to this Content</h2></div>
                                <div class="col-md-6 text-right">
                                    <a href="{{ route('manage-content')}}" class="btn btn-primary">Back</a>

                                    <a  class="btn btn-primary" href="{{ route('show-comments',$content->id)}}">See Comments</a>
                                </div>
                            </div>


                            <div class="row text-md">
                                <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('store-comments',$content->id)}}" >
                                        @csrf


                                        <div class="form-group  d-flex hustify-content-center">
                                            <label for="name" class="col-sm-3 control-label">Content Id<span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <input type="text" readonly class="form-control" id="content_id" name="content_id" value="{{$content->id}}">
                                            </div>
                                        </div>


                                        <div class="form-group  d-flex hustify-content-center">
                                            <label for="details" class="col-sm-3 control-label">Details<span class="text-danger">*</span></label>
                                            <div class="col-sm-9">
                                                <textarea class="form-control" rows="4" id="details" name="details" placeholder="Write Details..." >{{old('details')}}</textarea>

                                                @error('details')
                                                    <p class="text-danger">{{$message}}</p>
                                                @enderror
                                            </div>
                                        </div>


                                        <div class="form-group mt-xlg">
                                            <div class="col-sm-offset-3 col-sm-6">
                                                <button type="submit" class="btn btn-primary">Save Comment</button>
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

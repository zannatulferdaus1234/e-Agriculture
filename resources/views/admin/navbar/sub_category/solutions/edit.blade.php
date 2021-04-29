@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Solution </a></li>
            <li><a href="javascript:avoid(0)">Update Solution</a></li>

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
                            <div class="col-md-6 text-success"><h4>update Solution</h4></div>
                            <div class="col-md-6 text-right">
                            <a  class="btn btn-primary" href="{{ route('manage-crops_solution')}}">All Solutions</a>
                        </div>
                        </div>

                        <div class="row text-md">
                            <div class="col-md-10">
                                <form class="form-horizontal" method="POST" action="{{ route('update-crops_solution',$solution->id)}}" >
                                    @csrf
                                    @method('PATCH')

                                    <div class="form-group  d-flex hustify-content-center">
                                        <label for="name" class="col-sm-3 control-label">Question Id<span class="text-danger">*</span></label>
                                        <div class="col-sm-3">
                                            <input type="text" readonly class="form-control" id="question_id" name="question_id" value="{{$solution->question->id}}">
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="details" class="col-sm-3 control-label">Details<span class="text-danger">*</span></label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" rows="4" id="details" name="details" placeholder="Write Details..." >{{$solution['details']}}</textarea>
                                            @error('details')
                                                <p class="text-danger">{{$message}}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="form-group mt-xlg">
                                        <div class="col-sm-offset-3 col-sm-6">
                                            <button type="submit" class="btn btn-primary">Update Solution</button>
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

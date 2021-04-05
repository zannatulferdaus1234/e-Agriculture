@extends('admin.layouts.layout')


<!-- image for subcategory ,for admin -->
@section('content')

    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">SubCategory</a></li>
                <li><a href="javascript:avoid(0)">Add Image to SubCategory</a></li>

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
                                <div class="col-md-6 text-success"><h2>Image for SubCategory</h2></div>
                                <div class="col-md-6 text-right">
                                    {{-- <a href="{{route('show-crops_solution',$crops_question->id)}}" class="btn btn-primary">See Image</a> --}}
                                </div>
                            </div>


                            <div class="row text-md">
                                <div class="col-md-10">
                                    <form class="form-horizontal" method="POST" action="{{ route('store-crops_solution',$question->id)}}" enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group">
                                            <label for="question_id" class="col-sm-3 control-label">Question Id<span class="text-danger">*</span></label>
                                            <div class="col-sm-3">
                                                <input type="text" readonly class="form-control" id="question_id" name="question_id" value="{{$question->id}}">
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


                                        <div class="form-group">
                                            <label for="image" class="col-sm-3 control-label">Images<span class="text-danger">*</span></label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control" id="image" name="image" >

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

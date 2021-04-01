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
                                    <a href="{{route('show-crops_image',$sub_category->id)}}" class="btn btn-primary">See Image</a>

                                    <a  class="btn btn-primary" href="{{ route('manage-sub_category',$sub_category->id) }}">All SubCategory</a>
                                </div>
                            </div>


                            <div class="row text-md">
                                <div class="col-md-10">
                                    <form class="form-horizontal" method="POST" action="{{ route('store-crops_image',$sub_category->id)}}" enctype="multipart/form-data">
                                        @csrf


                                        <div class="form-group  d-flex hustify-content-center">
                                            <label for="name" class="col-sm-3 control-label">SubCategory Id<span class="text-danger">*</span></label>
                                            <div class="col-sm-3">
                                                <input type="text" readonly class="form-control" id="sub_category_id" name="sub_category_id" value="{{$sub_category->id}}">
                                            </div>
                                        </div>


                                        <div class="form-group  d-flex hustify-content-center">
                                            <label for="crops_image" class="col-sm-3 control-label">Crop Images<span class="text-danger">*</span></label>
                                            <div class="col-sm-5">
                                                <input type="file" class="form-control" id="crops_image" name="crops_image" >

                                                @error('crops_image')
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

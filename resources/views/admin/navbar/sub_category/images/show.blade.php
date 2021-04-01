@extends('admin.layouts.layout')


<!-- show image for subcategory ,for admin -->

@section('content')

<div class="content">
    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">SubCategory</a></li>
                <li><a href="javascript:avoid(0)">Image for SubCategory</a></li>
            </ul>
        </div>
    </div>

    <div class="row animated fadeInUp">
      <div class="row">
        <div class="col-sm-12 col-md-8">


            <div class="panel b-primary bt-md">
                <div class="panel-content">
                  <div class="row">
                    <div class="col-xs-6">
                      <h4>Image for  SubCategory</h4>
                    </div>
                    <div class="col-xs-6 text-right">
                      <a class="btn btn-primary" href="{{route('manage-sub_category')}}">All SubCategory</a>
                      <a class="btn btn-primary" href="{{route('create-crops_image',$sub_category->id)}}">Add Image</a>

                    </div>

                  </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="table-responsive">
                              <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th>SubCategory Name</th>
                                      <th>Image for SubCategory</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @forelse($sub_category->crops_image as $crops_image)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$crops_image->sub_category->name}}</td>

                                    <td style="height:40px; width:40px;">
                                        <img src="{{ asset('/storage/'.$crops_image->crops_image)}}" style="height:60px; width:80px;">
                                    </td>

                                    <td>
                                        <a href="{{ route('delete-crops_image',[$crops_image->sub_category->id,$crops_image->id]) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
                                    </td>
                                  </tr>

                                  @empty
                                      <p class="my-5">No Numbers Found </p>

                                  @endforelse

                                </tbody>
                              </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->
</div>
@endsection

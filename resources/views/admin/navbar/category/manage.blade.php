@extends('admin.layouts.layout')

@section('content')

<div class="content">
    <!-- content HEADER -->
    <!-- ========================================================= -->
    <div class="content-header">
        <!-- leftside content header -->
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">Category</a></li>
                <li><a href="javascript:avoid(0)">Manage Category</a></li>
            </ul>
        </div>
    </div>
    <!-- =-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-= -->

    <div class="row animated fadeInUp">
      <div class="row">
        <!--HORIZONTAL-->
        <div class="col-sm-12 col-md-8">


            <div class="panel b-primary bt-md">
                <div class="panel-content">
                  <div class="row">
                    <div class="col-xs-6">
                      <h4>Manage Category</h4>
                    </div>
                    <div class="col-xs-6 text-right">
                      <a class="btn btn-primary" href="{{route('create-category')}}">Add Category</a>
                    </div>

                  </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="table-responsive">
                              <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th>Category Name</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @foreach($category as $category)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $category->name }}</td>
                                    <td>
                                        <a href="{{ route('edit-category',$category-> id)}}" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-category',$category-> id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
                                    </td>
                                  </tr>

                                  @endforeach

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

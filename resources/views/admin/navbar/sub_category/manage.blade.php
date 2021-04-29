@extends('admin.layouts.layout')

@section('content')


<!-- manage  subcategory ,for admin -->

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">SubCategory</a></li>
            <li><a href="javascript:avoid(0)">Manage SubCategory</a></li>

        </ul>
    </div>
</div>

<div class="row animated fadeInUp">
    <div class="row">

        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row mb-xlg">
                            <div class="col-md-6 text-success"><h2>Manage SubCategory</h2></div>
                            <div class="col-md-6 text-right">
                                <a  class="btn btn-primary" href="{{ route('create-sub_category') }}">Add SubCategory</a>
                            </div>
                        </div>
                        <div class="row text-md">
                            <div class="col-md-12">
                          <div class="table-responsive">
                              <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th>Category Name</th>
                                      <th>SubCategory Name</th>
                                      <th>Image</th>
                                      <th>Contents</th>
                                      <th>Questions</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>


                                <tbody>

                                  @forelse($sub_category as $sub_category)
                                  <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $sub_category->category->name }}</td>
                                    <td>{{ $sub_category->name }}</td>

                                    <td style="height:40px; width:40px;">
                                        <img src="{{ asset('/storage/'.$sub_category->image)}}" style="height:60px; width:80px;">
                                    </td>

                                    <td>
                                        <a href="{{route('show-content',$sub_category->id)}}" class="btn btn-primary">See Contents</a>
                                    </td>

                                    <td>
                                        <a href="{{route('show-crops_question',$sub_category->id)}}" class="btn btn-primary">See Question</a>
                                    </td>

                                    <td>
                                        <a href="{{ route('edit-sub_category',$sub_category-> id)}}" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-sub_category',$sub_category-> id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
                                    </td>

                                  </tr>

                                  @empty
                                      <p class="my-5 text-danger">No Category Inserted Yet !!! </p>

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

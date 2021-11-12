@extends('admin.layouts.layout')

@section('content')


<!-- manage  subcategory ,for admin -->

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Counter Category</a></li>

        </ul>
    </div>
</div>

<div class="row animated fadeInUp">
    <div class="row">

        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row mb-xlg">
                            <div class="col-md-6 text-success"><h2>Manage Counter counterCategory</h2></div>
                            <div class="col-md-6 text-right">
                                <a  class="btn btn-primary" href="{{ route('create-counterCategory') }}">Add Counter Category</a>
                            </div>
                        </div>
                        <div class="row text-md">
                            <div class="col-md-12">
                          <div class="table-responsive">
                              <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th>Title</th>
                                      <th>No.</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>


                                <tbody>

                                  @forelse($counterCategory as $counterCategory)
                                  <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $counterCategory->title }}</td>
                                    <td>{{ $counterCategory->counter }}</td>



                                    <td>
                                        <a href="{{ route('add-counterCategory',$counterCategory-> id)}}" class="btn btn-primary btn-sm"> <i class="fa fa-pencil"> Add</i></a>
                                        <a href="{{ route('edit-counterCategory',$counterCategory-> id)}}" class="btn btn-success btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-counterCategory',$counterCategory-> id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
                                    </td>

                                  </tr>

                                  @empty
                                      <p class="my-5 text-danger">No counterCategory Inserted Yet !!! </p>

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

@extends('admin.layouts.layout')

@section('content')
<!-- manage category ,for admin -->

<div class="content">

    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">Category</a></li>
                <li><a href="javascript:avoid(0)">Manage Category</a></li>
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
                                      <th>Status</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @forelse($category as $category)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{ $category->name }}</td>
                                  <td> <input data-size="mini" type="checkbox" data-toggle="toggle" data-on="Active" data-off="Inactive" id="catagoryStatus" data-id="{{ $category->id }}" {{ $category->status==1 ?'checked':''}}></td>
                                    <td>
                                        <a href="{{ route('edit-category',$category-> id)}}" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-category',$category-> id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
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
</div>




@endsection

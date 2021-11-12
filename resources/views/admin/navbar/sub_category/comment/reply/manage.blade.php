@extends('admin.layouts.layout')

@section('content')


<!-- manage  subcategory ,for admin -->

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Reply</a></li>
            <li><a href="javascript:avoid(0)">All Replies</a></li>

        </ul>
    </div>
</div>

<div class="row animated fadeInUp">
    <div class="row">

        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row mb-xlg">
                            <div class="col-md-6 text-success"><h2>View Replies</h2></div>
                            <div class="col-md-6 text-right">
                                <a  class="btn btn-primary" href="{{ route('manage-comments') }}">Add reply</a>
                            </div>
                        </div>
                        <div class="row text-md">
                            <div class="col-md-12">
                          <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th>User</th>
                                      <th>SubCategory Name</th>
                                      <th>Content Title</th>
                                      <th>Comment Details</th>
                                      <th>Replies Details</th>
                                      <th>Action</th>

                                  </tr>
                                </thead>
                                <tbody>

                                  @forelse($replies as $replies)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$replies->user->name}}</td>
                                    <td>{{$replies->comment->content->sub_category->name}}</td>
                                    <td>{{$replies->comment->content->title}}</td>
                                    <td>{{$replies->comment->details}}</td>
                                    <td>{{$replies->details}}</td>



                                    <td>
                                        <a href="{{ route('edit-reply',[$replies->comment->id,$replies->id]) }}" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-reply',[$replies->comment->id,$replies->id]) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
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

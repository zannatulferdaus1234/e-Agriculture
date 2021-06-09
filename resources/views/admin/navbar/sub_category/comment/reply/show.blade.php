@extends('admin.layouts.layout')


<!-- show image for subcategory ,for admin -->

@section('content')

<div class="content">
    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">Reply</a></li>
                <li><a href="javascript:avoid(0)">Reply for Comment</a></li>
            </ul>
        </div>
    </div>

    <div class="row animated fadeInUp">
      <div class="row">
        <div class="col-sm-12 col-md-8">


            <div class="panel b-primary bt-md">
                <div class="panel-content">
                  <div class="row">
                    <div class="col-xs-6 text-success">
                      <h2>Reply for Comment</h2><br>
                    </div>
                    <div class="col-xs-6 text-right">
                      <a class="btn btn-primary" href="{{ route('manage-reply')}}">All Replies</a>
                      <a class="btn btn-primary" href="{{ route('create-reply',$comment->id)}}">Add reply</a>

                    </div>

                  </div>
                    <div class="row">
                        <div class="col-md-12">
                          <div class="table-responsive">
                              <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th>Content ID</th>
                                      <th>Comment details</th>
                                      <th>Reply Details</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @forelse($comment->reply as $reply)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$reply->comment->content->id}}</td>
                                    <td>{{$reply->comment->details}}</td>
                                    <td>{{$reply->details}}</td>

                                    <td>
                                        <a href="{{ route('edit-reply',[$reply->comment->id,$reply->id]) }}" class="btn btn-danger btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-reply',[$reply->comment->id,$reply->id]) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
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

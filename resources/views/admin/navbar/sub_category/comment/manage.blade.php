@extends('admin.layouts.layout')

@section('content')


<!-- manage  subcategory ,for admin -->

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Comment</a></li>
            <li><a href="javascript:avoid(0)">All Comment</a></li>

        </ul>
    </div>
</div>

<div class="row animated fadeInUp">
    <div class="row">

        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row mb-xlg">
                            <div class="col-md-6 text-success"><h2>View Comments</h2></div>
                            <div class="col-md-6 text-right">
                                <a  class="btn btn-primary" href="{{ route('create-content') }}">Add Content</a>
                            </div>
                        </div>
                        <div class="row text-md">
                            <div class="col-md-12">
                          <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th>End User</th>
                                      <th>SubCategory Name</th>
                                      <th>Content Title</th>
                                      <th>Comment </th>
                                      <th>Replies </th>
                                      <th>Action</th>

                                  </tr>
                                </thead>
                                <tbody>

                                  @forelse($comment as $comment)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$comment->end_user->name}}</td>

                                    <td>{{$comment->content->sub_category->name}}</td>
                                    <td>{{$comment->content->title}}</td>
                                    <td>{{$comment->details}}</td>


                                    <td>
                                        <a href="{{ route('create-reply',$comment->id) }}" class="btn btn-warning ">Add Reply</i></a>
                                        <a href="{{ route('show-reply',$comment->id) }}" class="btn btn-danger ">See Reply</a>
                                    </td>

                                    <td>
                                        <a href="{{ route('edit-comments',[$comment->content->id,$comment->id]) }}" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-comments',[$comment->content->id,$comment->id]) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
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

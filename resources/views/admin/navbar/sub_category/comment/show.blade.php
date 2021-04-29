@extends('admin.layouts.layout')


<!-- show image for subcategory ,for admin -->

@section('content')

<div class="content">
    <div class="content-header">
        <div class="leftside-content-header">
            <ul class="breadcrumbs">
                <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
                <li><a href="javascript:avoid(0)">Comment</a></li>
                <li><a href="javascript:avoid(0)">Comment for Content</a></li>
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
                      <h4>Comment for Content</h4>
                    </div>
                    <div class="col-xs-6 text-right">
                      <a class="btn btn-primary" href="{{ route('manage-comments')}}">All Comments</a>
                      <a class="btn btn-primary" href="{{ route('create-comments',$content->id)}}">Add Comment</a>

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
                                      <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @forelse($content->comment as $comments)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$comments->content->id}}</td>
                                    <td>{{$comments->details}}</td>

                                    <td>
                                        <a href="{{ route('edit-comments',[$comments->content->id,$comments->id]) }}" class="btn btn-danger btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-comments',[$comments->content->id,$comments->id]) }}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
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

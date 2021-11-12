@extends('admin.layouts.layout')

@section('content')


<!-- manage  subcategory ,for admin -->

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">Question</a></li>
            <li><a href="javascript:avoid(0)">All Question</a></li>

        </ul>
    </div>
</div>

<div class="row animated fadeInUp">
    <div class="row">

        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row mb-xlg">
                            <div class="col-md-6 text-success"><h2>View Questions</h2></div>
                            <div class="col-md-6 text-right">
                                <a  class="btn btn-primary" href="{{ route('create-crops_question') }}">Add Question</a>
                                <a  class="btn btn-primary" href="{{ route('manage-sub_category') }}">Back</a>

                            </div>
                        </div>
                        <div class="row text-md">
                            <div class="col-md-12">
                          <div class="table-responsive">
                            <table id="basic-table" class="data-table table table-striped nowrap table-hover table-bordered" cellspacing="0" width="100%">
                                <thead>
                                  <tr>
                                      <th>SL</th>
                                      <th>SubCategory Name</th>
                                      <th>Crops Grain</th>
                                      <th>Soil Type</th>
                                      <th>Title</th>
                                      <th>Details</th>
                                      <th>Image</th>
                                  </tr>
                                </thead>
                                <tbody>

                                  @forelse($sub_category->question as $question)

                                  <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$question->sub_category->name}}</td>
                                    <td>{{$question->grain_varieties}}</td>
                                    <td>{{$question->soil_type}}</td>
                                    <td>{{$question->title}}</td>
                                    <td>{{$question->details}}</td>

                                    <td style="height:40px; width:40px;">
                                        <img src="{{ asset('/storage/'.$question->image)}}" style="height:60px; width:80px;">
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
</div>
@endsection

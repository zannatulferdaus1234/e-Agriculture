@extends('admin.layouts.layout')

@section('content')

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">SubCategory</a></li>
            <li><a href="javascript:avoid(0)">Add SubCategory</a></li>

        </ul>
    </div>
</div>

<div class="row animated fadeInUp">
    <div class="row">

        <div class="col-sm-12 col-md-10 col-md-offset-1">
                <div class="panel b-primary bt-md">
                    <div class="panel-content">
                        <div class="row mb-xlg">
                            <div class="col-md-6 text-success"><h2>Create SubCategory</h2></div>
                            <div class="col-md-6 text-right">
                                <a  class="btn btn-primary" href="{{ route('manage-sub_category') }}">All SubCategory</a>
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
                                      <th>Index</th>
                                      <th>Lifespan</th>
                                      <th>Breed_innovation</th>
                                      <th>Land_selection</th>
                                      <th>Seed_picking</th>
                                      <th>Seedbed_preparation</th>
                                      <th>Seedbed_care</th>
                                      <th>Land_preparation</th>
                                      <th>Planting_distance</th>
                                      <th>Seedlings</th>
                                      <th>Weed_control</th>
                                      <th>Fertilizer</th>
                                      <th>Irrigation</th>
                                      <th>Pest</th>
                                      <th>Insect</th>
                                      <th>Disease</th>
                                      <th>Harvesting</th>
                                      <th>Yield</th>
                                      <th>Images</th>
                                      <th>Action</th>
                                  </tr>
                                </thead>


                                <tbody>

                                  @foreach($sub_category as $sub_category)
                                  <tr>
                                    <td>{{ $loop->iteration}}</td>
                                    <td>{{ $sub_category->category->name }}</td>
                                    <td>{{ $sub_category->name }}</td>
                                    <td>{{ $sub_category->index }}</td>
                                    <td>{{ $sub_category->lifespan }}</td>
                                    <td>{{ $sub_category->breed_innovation }}</td>
                                    <td>{{ $sub_category->land_selection }}</td>
                                    <td>{{ $sub_category->seed_picking }}</td>
                                    <td>{{ $sub_category->seedbed_preparation }}</td>
                                    <td>{{ $sub_category->seedbed_care }}</td>
                                    <td>{{ $sub_category->land_preparation }}</td>
                                    <td>{{ $sub_category->planting_distance }}</td>
                                    <td>{{ $sub_category->seedlings }}</td>
                                    <td>{{ $sub_category->weed_control }}</td>
                                    <td>{{ $sub_category->fertilizer }}</td>
                                    <td>{{ $sub_category->irrigation }}</td>
                                    <td>{{ $sub_category->pest }}</td>
                                    <td>{{ $sub_category->insect }}</td>
                                    <td>{{ $sub_category->disease }}</td>
                                    <td>{{ $sub_category->harvesting }}</td>
                                    <td>{{ $sub_category->yield }}</td>

                                    <td style="height:40px; width:40px;">
                                        <img src="{{ asset('/storage/'.$sub_category->images)}}" style="height:60px; width:80px;">
                                        </td>
                                    <td>

                                    <td>
                                        <a href="{{ route('edit-sub_category',$sub_category-> id)}}" class="btn btn-warning btn-sm"> <i class="fa fa-pencil"> Edit</i></a>
                                        <a href="{{ route('delete-sub_category',$sub_category-> id)}}" class="btn btn-danger btn-sm"> <i class="fa fa-trash-o"> Delete</i></a>
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

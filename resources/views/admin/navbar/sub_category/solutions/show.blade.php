@extends('admin.layouts.layout')

@section('content')


<!-- manage  subcategory ,for admin -->

<div class="content-header">
    <div class="leftside-content-header">
        <ul class="breadcrumbs">
            <li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ route('home') }}">Home</a></li>
            <li><a href="javascript:avoid(0)">SubCategory</a></li>
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

                                <div class="">
                                    @foreach($question->solution as $solution)

                                    <p>{{$loop->iteration}}</p>
                                    <p>{{$solution->title}}
                                    @endforeach
                                </div>

                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
</div>
@endsection

@extends('admin.layouts.layout')

@section('content')

<h1 style="margin-bottom:50px"> Welcome to the e-Agriculture Admin site </h1>


<div class="animated fadeInRight">
    <!--WIDGET BOX STYLE 1-->
    <div class="row">

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="{{ route('manage-category')}}">
                    <div class="panel-content">
                        <h1 class="title">Categories</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="{{ route('manage-sub_category')}}">
                    <div class="panel-content">
                        <h1 class="title">Sub Categories</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="{{ route('manage-content')}}">
                    <div class="panel-content">
                        <h1 class="title">Contents</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="{{ route('manage-comments')}}">
                    <div class="panel-content">
                        <h1 class="title">Comments</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="{{ route('manage-reply')}}">
                    <div class="panel-content">
                        <h1 class="title">Replies</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="{{ route('manage-crops_question')}}">
                    <div class="panel-content">
                        <h1 class="title">Questions</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="{{ route('manage-crops_solution')}}">
                    <div class="panel-content">
                        <h1 class="title">Solutions</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="{{ route('manage-project')}}">
                    <div class="panel-content">
                        <h1 class="title">Projects</h1>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-sm-6 col-lg-4">
            <div class="panel widgetbox wbox-3 bg-darker-2 ">
                <a href="#">
                    <div class="panel-content">
                        <h1 class="title">Weather Details</h1>
                    </div>
                </a>
            </div>
        </div>


    </div>

</div>
@endsection

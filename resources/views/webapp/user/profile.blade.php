@extends('webapp.layout.layout2')

@section('content')    <div class="wrapper home2">
    <section class="wf100 p100 inner-header">
        <div class="container">
           <h1>{{Auth::guard('end_user')->user()->name}}</h1>
           <ul>
              <li><a href="{{route('webapp')}}">Home</a></li>
              <li><a href="javascript::avoid(0)"> {{Auth::guard('end_user')->user()->name}} </a></li>
           </ul>
        </div>
     </section>
     <!--Inner Header End-->
     <!--Blog Start-->
     <section class="wf100 p80 team">
        <div class="team-details">
           <div class="container">
              <div class="row  justify-content-center">

                 <div class="col-lg-8 ">
                    <div class="myaccount-form">
                       <h3 class="d-flex justify-content-center">Profile information</h3>

                       <div class="team-large-img d-flex justify-content-center "> <img class="rounded-circle" src="{{ Auth::guard('end_user')->user()->avatar }}" alt="" style="height :400px; width:400px;"> </div>

                       <form action="{{ route('user_profileUpdate',Auth::guard('end_user')->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <ul class="row">

                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="file" class="form-control" placeholder="Update Your Image" name="name" >
                                </div>
                                @error('avatar')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Your Name" name="name" value="{{Auth::guard('end_user')->user()->name}}">
                                </div>
                                @error('name')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Enter your Phone no. " name="phone" value="{{Auth::guard('end_user')->user()->phone}}" >
                                </div>
                                @error('phone')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="email" class="form-control" placeholder="Enter your email " name="email" value="{{Auth::guard('end_user')->user()->email}}" >
                                </div>
                                @error('email')
                                <p class="text-danger">{{$message}}</p>
                                @enderror
                            </div>

                            <div class="col-md-12">
                                <button class="btn-success btn float-right px-5">Save</button>
                            </div>

                        </ul>
                        </form>
                    </div>
                 </div>
              </div>
           </div>
        </div>


     </section>

 @endsection

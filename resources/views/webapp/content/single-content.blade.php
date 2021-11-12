@extends('webapp.layout.main-layout')

@section('content')

    <!--Inner Header Start-->
    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>{{ Str::limit(ucfirst($content->title), 40) }}</h1>
            <ul>
                <li><a href="{{ route('webapp') }}">Home</a></li>
                <li><a href="{{ route('all-content', $content->sub_category->name) }}">
                        {{ ucfirst($content->sub_category->name) }} </a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->
    <!--Blog Start-->
    <section class="wf100 p80 blog">
        <div class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8">
                        <!--Blog Single Content Start-->
                        <div class="blog-single-content">

                            @include('webapp.content.single-content-details')


                            <!--Post Tags Start-->
                            <div class="single-post-tags wf100"> <a href="#">Solar Energy</a> <a href="#"> Plant Ecology
                                </a> <a href="#"> Wildlife </a> <a href="#"> Eco Ideas </a> <a href="#"> Waste Management
                                </a> <a href="#"> Water </a> <a href="#"> Forest Planting </a> <a href="#"> Donation </a> <a
                                    href="#"> Wind Energy </a> <a href="#"> Recycling </a> </div>
                            <!--Post Tags End-->

                            <!--Author Comments Start-->
                            <div class="post-comments wf100">
                                <div class="d-flex justify-content-between align-items-center">
                                    <h4>Comments on Post</h4>
                                    <a class=" btn btn-primary text-light"
                                        href="{{ route('add-comment', [$content->sub_category->name, $content->id]) }}">Leave
                                        Your Comment</a>
                                </div>

                                <ul class="comments mt-5">
                                    <!--Comment Start-->
                                    @includeIf('webapp.comment-reply.comment')
                                    <!--Comment End-->
                                </ul>
                            </div>

                            <!--Author Comments End-->

                            <!--Related Posts Start-->
                            <div class="wf100 related-posts">
                                <h4>Related Posts</h4>
                                <ul>
                                    <li>
                                        <div class="rp-box">
                                            <h6> <a href="#">Social innovation of nonprofit, think tank, outcome to
                                                    donate</a> </h6>
                                            <ul class="post-meta">
                                                <li> <a href="#"><i class="fas fa-calendar-alt"></i> 29 September, 2018</a>
                                                </li>
                                                <li> <a href="#"><i class="fas fa-comments"></i> 134 Comments </a> </li>
                                                <li> <a href="#"><i class="fas fa-share-alt"></i> 206 Share </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rp-box">
                                            <h6> <a href="#">Social innovation of nonprofit, think tank, outcome to
                                                    donate</a> </h6>
                                            <ul class="post-meta">
                                                <li> <a href="#"><i class="fas fa-calendar-alt"></i> 29 September, 2018</a>
                                                </li>
                                                <li> <a href="#"><i class="fas fa-comments"></i> 134 Comments </a> </li>
                                                <li> <a href="#"><i class="fas fa-share-alt"></i> 206 Share </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="rp-box">
                                            <h6> <a href="#">Social innovation of nonprofit, think tank, outcome to
                                                    donate</a> </h6>
                                            <ul class="post-meta">
                                                <li> <a href="#"><i class="fas fa-calendar-alt"></i> 29 September, 2018</a>
                                                </li>
                                                <li> <a href="#"><i class="fas fa-comments"></i> 134 Comments </a> </li>
                                                <li> <a href="#"><i class="fas fa-share-alt"></i> 206 Share </a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--Related Posts End-->

                            <!--Leave a Comment Start-->

                            <div class="wf100 comment-form">
                                @auth('end_user')
                                    <h4>Leave a Comment</h4>
                                    <ul>
                                        <li class="full">
                                            <a class=" btn post-btn text-light"
                                                href="{{ route('add-comment', [$content->sub_category->name, $content->id]) }}">Post
                                                Your Comment</a>
                                        </li>
                                    </ul>
                                @else
                                    <h4><a href="{{ route('userLogin') }} ">Please Login to make a comment</a></h4>
                                @endauth

                            </div>
                            <!--Leave a Comment End-->

                        </div>
                        <!--Blog Single Content End-->
                    </div>
                    <!--Sidebar Start-->
                    <div class="col-lg-3 col-md-4">
                        <div class="sidebar">
                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>Search</h5>
                                <div class="side-search">
                                    <form>
                                        <input type="search" class="form-control" placeholder="Search">
                                        <button><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!--Widget End-->

                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>News & Articles</h5>
                                <ul class="lastest-products">
                                    <li> <img src="{{ asset('/') }}assets/webapp/images/flp1.jpg" alt=""> <strong><a
                                                href="#">How you can keep alive wild animals for...</a></strong> <span
                                            class="pdate"><i class="fas fa-calendar-alt"></i> 29 September, 2018</span>
                                    </li>
                                    <li> <img src="{{ asset('/') }}assets/webapp/images/flp2.jpg" alt=""> <strong><a
                                                href="#">Eliminate your plastic bottle pollution</a></strong> <span
                                            class="pdate"><i class="fas fa-calendar-alt"></i> 29 September, 2018</span>
                                    </li>
                                    <li> <img src="{{ asset('/') }}assets/webapp/images/flp3.jpg" alt=""> <strong><a
                                                href="#">How you can keep alive wild animals for...</a></strong> <span
                                            class="pdate"><i class="fas fa-calendar-alt"></i> 29 September, 2018</span>
                                    </li>
                                </ul>
                            </div>
                            <!--Widget Start-->
                            <!--Widget Start-->
                            <div class="side-widget project-list-widget">
                                <h5>Current Projects</h5>
                                <ul>
                                    <li><a href="#">Waste Management</a></li>
                                    <li><a href="#">Solar Energy</a></li>
                                    <li><a href="#">Eco Ideas</a></li>
                                    <li><a href="#">Recycling Materials</a></li>
                                    <li><a href="#">Plant Ecology</a></li>
                                    <li><a href="#">Saving Wildlife</a></li>
                                    <li><a href="#">Water Resources</a></li>
                                    <li><a href="#">Forest & Tree Planting</a></li>
                                    <li><a href="#">Wing Energy</a></li>
                                </ul>
                            </div>
                            <!--Widget End-->
                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>Tags</h5>
                                <div class="single-post-tags"> <a href="#">Solar Energy</a> <a href="#"> Plant Ecology </a>
                                    <a href="#"> Wildlife </a> <a href="#"> Eco Ideas </a> <a href="#"> Waste Management
                                    </a> <a href="#"> Water </a> <a href="#"> Forest Planting </a> <a href="#"> Donation
                                    </a> <a href="#"> Wind Energy </a> <a href="#"> Recycling </a> </div>
                            </div>
                            <!--Widget End-->
                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>Recent Work</h5>
                                <div id="side-slider" class="owl-carousel owl-theme">
                                    <!--Item Start-->
                                    <div class="item">
                                        <div class="pro-box">
                                            <img src="{{ asset('/') }}assets/webapp/images/current-pro5.jpg" alt="">
                                            <h5>Forest &amp; Tree Planting</h5>
                                            <div class="pro-hover">
                                                <h6>Forest &amp; Tree Planting</h6>
                                                <p>We are working over 20 years on Waste Management &amp; Material Recycling
                                                    Projects.</p>
                                                <a href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item End-->
                                    <!--Item Start-->
                                    <div class="item">
                                        <div class="pro-box">
                                            <img src="{{ asset('/') }}assets/webapp/images/current-pro2.jpg" alt="">
                                            <h5>Forest &amp; Tree Planting</h5>
                                            <div class="pro-hover">
                                                <h6>Forest &amp; Tree Planting</h6>
                                                <p>We are working over 20 years on Waste Management &amp; Material Recycling
                                                    Projects.</p>
                                                <a href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item End-->
                                    <!--Item Start-->
                                    <div class="item">
                                        <div class="pro-box">
                                            <img src="{{ asset('/') }}assets/webapp/images/current-pro1.jpg" alt="">
                                            <h5>Forest &amp; Tree Planting</h5>
                                            <div class="pro-hover">
                                                <h6>Forest &amp; Tree Planting</h6>
                                                <p>We are working over 20 years on Waste Management &amp; Material Recycling
                                                    Projects.</p>
                                                <a href="#">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Item End-->
                                </div>
                            </div>
                            <!--Widget End-->


                        </div>
                    </div>
                    <!--Sidebar End-->
                </div>
            </div>
        </div>
    </section>
    <!--Blog End-->

@endsection

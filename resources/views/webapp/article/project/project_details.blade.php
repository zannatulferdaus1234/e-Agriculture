@extends('webapp.layout.main-layout')

@section('content')

    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>{{ ucfirst($project->title) }}</h1>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Projects</a></li>
                <li><a href="#">{{ ucfirst($project->title) }} </a></li>
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
                            <div class="blog-single-thumb"><img style="height:30rem; width:50rem"  src="{{ URL::to('/storage/' . $project->image) }}" alt=""></div>
                            <h3>{{ $project->title }}</h3>
                            <ul class="post-meta">
                                <li><i class="fas fa-user-circle"></i> John Ashley</li>
                                <li><i class="fas fa-calendar-alt"></i> {{ $project->created_at->format('d M Y, D') }}
                                </li>
                                {{-- <li><i class="fas fa-comments"></i> {{ count($content->comment) }} Comments</li> --}}
                                <li class="tags"><i class="fas fa-tags"></i> <a href="#">Plant</a> <a href="#">Trees</a> <a
                                        href="#">Water</a> <a href="#">Recycling</a></li>
                            </ul>
                            <p> {{ ucfirst($project->details) }}</p>


                            <h5>Project Documentary</h5>
                            <iframe src="https://player.vimeo.com/video/89009039"></iframe>
                            <!--Post Tags Start-->
                            <div class="single-post-tags wf100"> <a href="#">Solar Energy</a> <a href="#"> Plant Ecology
                                </a> <a href="#"> Wildlife </a> <a href="#"> Eco Ideas </a> <a href="#"> Waste Management
                                </a> <a href="#"> Water </a> <a href="#"> Forest Planting </a> <a href="#"> Donation </a> <a
                                    href="#"> Wind Energy </a> <a href="#"> Recycling </a> </div>
                            <!--Post Tags End-->
                            <!--Author Box Start-->
                            <div class="author-box wf100">
                                <img src="images/auser.jpg" alt="">
                                <h5>About Post Author</h5>
                                <p> Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibe saepe eveniet
                                    ut et voluptates repudiandae sint et molestiaerecusanda Itaque earum rerum hic tenetur a
                                    sapien delectus, ut aut reiciendis. </p>
                            </div>
                            <!--Author Box End-->
                            <!--Author Comments Start-->
                            <div class="post-comments wf100">
                                <h4>Comments on Post</h4>
                                <ul class="comments">
                                    <!--Comment Start-->
                                    <li class="comment">
                                        <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                                        <div class="comment-txt">
                                            <h6> Mason Gray </h6>
                                            <p> Personally I think a combination of all these methods is most effective, but
                                                in today’s post I will be focusing specifically on how to use and style
                                                WordPress’ built-in sticky post feature and highlighting it’s best use case
                                                based on my own experience. </p>
                                            <ul class="comment-time">
                                                <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                                <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                            </ul>
                                        </div>
                                        <ul class="children">
                                            <!--Comment Start-->
                                            <li class="comment">
                                                <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                                                <div class="comment-txt">
                                                    <h6> Johny Elite </h6>
                                                    <p> Personally I think a combination of all these methods is most
                                                        effective, but in today’s post I will be focusing specifically on
                                                        how to use and style WordPress’ built-in sticky post feature and
                                                        highlighting it’s best use case based on my own experience. </p>
                                                    <ul class="comment-time">
                                                        <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                                        <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!--Comment End-->
                                            <!--Comment Start-->
                                            <li class="comment">
                                                <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                                                <div class="comment-txt">
                                                    <h6> Rog Kelly </h6>
                                                    <p> Personally I think a combination of all these methods is most
                                                        effective, but in today’s post I will be focusing specifically on
                                                        how to use and style WordPress’ built-in sticky post feature and
                                                        highlighting it’s best use case based on my own experience. </p>
                                                    <ul class="comment-time">
                                                        <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                                        <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                                    </ul>
                                                </div>
                                            </li>
                                            <!--Comment End-->
                                        </ul>
                                    </li>
                                    <!--Comment End-->
                                    <!--Comment Start-->
                                    <li class="comment">
                                        <div class="user-thumb"> <img src="images/auser.jpg" alt=""></div>
                                        <div class="comment-txt">
                                            <h6> Harry Butler </h6>
                                            <p> Personally I think a combination of all these methods is most effective, but
                                                in today’s post I will be focusing specifically on how to use and style
                                                WordPress’ built-in sticky post feature and highlighting it’s best use case
                                                based on my own experience. </p>
                                            <ul class="comment-time">
                                                <li>Posted: 09 July, 2018 at 2:37 pm</li>
                                                <li> <a href="#"><i class="fas fa-reply"></i> Reply</a> </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <!--Comment End-->
                                </ul>
                            </div>
                            <!--Author Comments End-->
                            <!--Leave a Comment Start-->
                            <div class="wf100 comment-form">
                                <h4>Leave a Comment</h4>
                                <ul>
                                    <li class="w3">
                                        <input type="text" class="form-control" placeholder="Full Name">
                                    </li>
                                    <li class="w3">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </li>
                                    <li class="w3 np">
                                        <input type="text" class="form-control" placeholder="Subject">
                                    </li>
                                    <li class="full">
                                        <textarea class="form-control" placeholder="Write Comments"></textarea>
                                    </li>
                                    <li class="full">
                                        <button class="post-btn">Post Your Comment</button>
                                    </li>
                                </ul>
                            </div>
                            <!--Leave a Comment End-->
                        </div>
                        <!--Blog Single Content End-->
                    </div>
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
                            <div class="side-widget text-widget">
                                <h5>Text Widget</h5>
                                <p> We are Ecova: eco &amp; environmental community. We need your support and help to Stop
                                    Globar Warning. Few generations ago it to seemed like world’s resources were infinite,
                                    and the people needed only to access them to create business, Lorem ipsum dolor it amet
                                    consect adipiscing. </p>
                            </div>
                            <!--Widget End-->
                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>News &amp; Articles</h5>
                                <ul class="lastest-products">
                                    <li> <img src="images/flp1.jpg" alt=""> <strong><a href="#">How you can keep alive wild
                                                animals for...</a></strong> <span class="pdate"><i
                                                class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
                                    <li> <img src="images/flp2.jpg" alt=""> <strong><a href="#">Eliminate your plastic
                                                bottle pollution</a></strong> <span class="pdate"><i
                                                class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
                                    <li> <img src="images/flp3.jpg" alt=""> <strong><a href="#">How you can keep alive wild
                                                animals for...</a></strong> <span class="pdate"><i
                                                class="fas fa-calendar-alt"></i> 29 September, 2018</span> </li>
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
                                    <li><a href="#">Forest &amp; Tree Planting</a></li>
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
                                        <div class="pro-box"> <img src="images/current-pro2.jpg" alt="">
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
                                        <div class="pro-box"> <img src="images/current-pro1.jpg" alt="">
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
                                        <div class="pro-box"> <img src="images/current-pro5.jpg" alt="">
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
                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>Our Causes</h5>
                                <div class="campaign-box">
                                    <div class="campaign-thumb"> <a href="#"><i class="fas fa-link"></i></a> <img
                                            src="images/news1.jpg" alt=""> </div>
                                    <div class="campaign-txt">
                                        <h6><a href="#">Let’s Stop Global Warming</a></h6>
                                        <ul class="participants">
                                            <li><img src="images/u1.jpg" alt=""></li>
                                            <li><img src="images/u4.jpg" alt=""></li>
                                            <li><img src="images/u5.jpg" alt=""></li>
                                            <li><span>+16</span></li>
                                            <li><strong><i>21</i> Backers</strong></li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 55%"
                                                aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <ul class="funds">
                                            <li><strong>47%</strong> Funded</li>
                                            <li><strong>$638</strong> Raised</li>
                                            <li><strong>$9750</strong> Required</li>
                                        </ul>
                                    </div>
                                    <a href="#" class="dbutton">Donate Now</a>
                                </div>
                            </div>
                            <!--Widget End-->
                            <!--Widget Start-->
                            <div class="side-widget">
                                <h5>Upcoming Events</h5>
                                <!--Blog Post Start-->
                                <div class="event-post">
                                    <div class="event-thumb">
                                        <a href="#"><i class="fas fa-link"></i></a> <img src="images/ep1.jpg" alt="">
                                        <ul class="post-meta">
                                            <li>29 August, 2018 </li>
                                            <li> 08:00 am - 01:00 pm</li>
                                        </ul>
                                    </div>
                                    <div class="event-txt">
                                        <h6><a href="#">Forest Planting Campaign</a></h6>
                                        <p><i class="fas fa-map-marker-alt"></i> Green Gardendening Center, NY </p>
                                    </div>
                                </div>
                                <!--Blog Post End-->
                            </div>
                            <!--Widget End-->
                            <!--Widget Start-->
                            <div class="side-widget archives">
                                <h5>Archives</h5>
                                <ul>
                                    <li><a href="#"> November 2018</a></li>
                                    <li><a href="#"> October 2018</a></li>
                                    <li><a href="#"> September 2018</a></li>
                                    <li><a href="#"> August 2018</a></li>
                                    <li><a href="#"> July 2018</a></li>
                                    <li><a href="#"> June 2018</a></li>
                                    <li><a href="#"> May 2018</a></li>
                                    <li><a href="#"> April 2018</a></li>
                                    <li><a href="#"> March 2018</a></li>
                                    <li><a href="#"> February 2018</a></li>
                                    <li><a href="#"> January 2018</a></li>
                                    <li><a href="#"> December 2017</a></li>
                                </ul>
                            </div>
                            <!--Widget End-->
                            <!--Widget Start-->
                            <div class="side-widget">
                                <div class="donation-amount">
                                    <h5>Make a Donation</h5>
                                    <form>
                                        <ul class="radio-boxes">
                                            <li>
                                                <div class="radio custom">
                                                    <input name="donation" id="d1" type="radio" class="css-radio">
                                                    <label for="d1" class="css-label">$5</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio custom">
                                                    <input name="donation" id="d2" type="radio" class="css-radio">
                                                    <label for="d2" class="css-label">$20</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio custom">
                                                    <input name="donation" id="d3" type="radio" class="css-radio">
                                                    <label for="d3" class="css-label">$50</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio custom">
                                                    <input name="donation" id="d4" type="radio" class="css-radio">
                                                    <label for="d4" class="css-label">$100</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio custom">
                                                    <input name="donation" id="d5" type="radio" class="css-radio">
                                                    <label for="d5" class="css-label">$250</label>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="radio custom">
                                                    <input name="donation" id="d6" type="radio" class="css-radio">
                                                    <label for="d6" class="css-label">$500</label>
                                                </div>
                                            </li>
                                            <li class="last-input">
                                                <div class="inputs">
                                                    <input class="enter" type="text" placeholder="Enter other amout $ ">
                                                </div>
                                            </li>
                                            <li class="form-submit">
                                                <button type="submit">Continue to Donate</button>
                                            </li>
                                        </ul>
                                    </form>
                                </div>
                            </div>
                            <!--Widget End-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

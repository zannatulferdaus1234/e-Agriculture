<header class="header-style-2">
    <nav class="navbar navbar-expand-lg">
       <a class="navbar-brand" href="index-2.html"><img src="{{ asset('/') }}assets/webapp/images/h2logo.png" alt=""></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i class="fas fa-bars"></i> </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">

            <li class="nav-item"> <a class="nav-link" href="{{ route('webapp')}}">Home</a> </li>

             <li class="nav-item"> <a class="nav-link" href="about.html">About</a> </li>

             <!-- all Category,Subcategory -->
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Categories </a>
                <ul class="dropdown-menu" >
                    @forelse($category as $category)
                    <li>
                        <a href="{{ route('all-sub_category',$category->name)}}">{{ ucfirst($category->name) }}</a>
                        <ul class="dropdown-menu" >
                            @forelse ( $category->sub_category as $sub_category )
                            <li><a href="{{ route('all-content',$sub_category->name)}}">{{ ucfirst($sub_category->name) }}</a></li>
                            @empty
                            <li><a href="#">No Items found</a></li>
                            @endforelse
                        </ul>
                    </li>
                   @empty
                        <li><a href="#">No Items found</a></li>
                    @endforelse

                </ul>
             </li>


             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="events-grid.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Events </a>
                <ul class="dropdown-menu" >
                   <li><a href="events-grid.html">Events Grid</a></li>
                   <li><a href="events-grid-2.html">Events Grid Two</a></li>
                   <li><a href="events-grid-3.html">Events Grid Three</a></li>
                   <li><a href="events-list.html">Events List</a></li>
                   <li><a href="events-list-two.html">Events List Two</a></li>
                   <li><a href="event-details.html">Event Details</a></li>
                </ul>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="causes.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Causes </a>
                <ul class="dropdown-menu" >
                   <li><a href="causes.html">Causes Grid</a></li>
                   <li><a href="causes-list.html">Causes List</a></li>
                   <li><a href="causes-details.html">Causes Details</a> </li>
                </ul>
             </li>
             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="blog.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Blogs </a>
                <ul class="dropdown-menu" >
                   <li><a href="blog.html">Blog Default</a></li>
                   <li><a href="blog-list.html">Blog List</a> </li>
                   <li><a href="blog-grid.html">Blog Grid</a></li>
                   <li><a href="blog-two-col.html">Blog Two Columns</a> </li>
                   <li><a href="blog-three-col.html">Blog Three Columns</a></li>
                   <li><a href="blog-details.html">Blog Details</a></li>
                </ul>
             </li>

             <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="contact.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Contact </a>
                <ul class="dropdown-menu" >
                   <li><a href="contact-one.html">Contact One</a> </li>
                   <li><a href="contact-two.html">Contact Two</a> </li>
                </ul>
             </li>

             <li class="nav-item"> <a class="nav-link" href="{{ route('all-question') }}">Question</a> </li>

          </ul>



          <ul class="topnav-right">
            <li> <a class="search-icon" href="#search"> <i class="fas fa-search"></i> </a> </li>

             @auth('end_user')
                <li class="login-reg dropdown px-3"> <a class="dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="">{{Auth::guard('end_user')->user()->name}}</a>
                    <ul class="dropdown-menu mt-3" >
                        <li><a href="{{ route('user_profile')}}">My Profile</a></li>
                        <li><a href="blog-list.html">Blog List</a> </li>
                    </ul>
                </li>
                <li class="login-reg"> <a href="{{route('userLogout')}}">Logout</a> </li>
            @else
                <li class="login-reg"> <a href="{{ route('userLogin')}}">Login</a> | <a href="{{ route('userRegistration')}}">Register</a> </li>
            @endauth

        </ul>

       </div>
    </nav>
 </header>

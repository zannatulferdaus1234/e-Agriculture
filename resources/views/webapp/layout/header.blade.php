<header class="header-style-2">
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('webapp') }}"><img
                src="{{ asset('/') }}assets/webapp/images/h2logo.png" alt="" style="height:55px;width:230px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <i
                class="fas fa-bars"></i> </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">

                <li class="nav-item"> <a class="nav-link" href="{{ route('webapp') }}">Home</a> </li>

                <li class="nav-item"> <a class="nav-link" href="{{ route('about_us') }}">About</a> </li>

                <!-- all Category,Subcategory -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Categories </a>
                    <ul class="dropdown-menu">
                        @forelse($category as $category)
                            <li>
                                <a
                                    href="{{ route('all-sub_category', $category->name) }}">{{ ucfirst($category->name) }}</a>
                                <ul class="dropdown-menu">
                                    @forelse ( $category->sub_category as $sub_category )
                                        <li><a
                                                href="{{ route('all-content', $sub_category->name) }}">{{ ucfirst($sub_category->name) }}</a>
                                        </li>
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


                <li class="nav-item"> <a class="nav-link" href="{{ route('all-project') }}">Projects</a> </li>



                {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="contact.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Contact </a>
                <ul class="dropdown-menu" >
                   <li><a href="contact-one.html">Contact One</a> </li>
                   <li><a href="contact-two.html">Contact Two</a> </li>
                </ul>
             </li> --}}

                <li class="nav-item"> <a class="nav-link" href="{{ route('all-question') }}">Question</a> </li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('review') }}">Reviews</a> </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="contact.html"  role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Reviews </a>
                    <ul class="dropdown-menu" >
                        @auth('end_user')

                       <li><a href="{{ route('creat-review') }}">Review</a> </li>
                       @endauth
                       <li><a href="{{ route('review') }}">All Reviews</a> </li>
                    </ul>
                 </li>

                </ul>



            <ul class="topnav-right">
                <li> <a class="search-icon" href="#search"> <i class="fas fa-search"></i> </a> </li>

                @auth('end_user')
                    <li class="login-reg dropdown px-3"> <a class="dropdown-toggle" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false"
                            href="">{{ Auth::guard('end_user')->user()->name }}</a>
                        <ul class="dropdown-menu mt-3">
                            <li><a href="{{ route('user_profile') }}">My Profile</a></li>
                        </ul>
                    </li>
                    <li class="login-reg"> <a href="{{ route('userLogout') }}">Logout</a> </li>
                @else
                    <li class="login-reg"> <a href="{{ route('userLogin') }}">Login</a> | <a
                            href="{{ route('userRegistration') }}">Register</a> </li>
                @endauth

            </ul>

        </div>
    </nav>
</header>

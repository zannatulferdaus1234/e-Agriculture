<nav>
    <ul class="nav nav-left-lines" id="main-nav">
        <!--HOME-->
        <li class="{{ request()->is('home') ? 'active-item':'' }}"><a href="{{ route('home') }}"><i class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>



    <!--Category-->
        <li class="has-child-item close-item {{ request()->is('home/category*') ? 'open-item':''}}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Category</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('home/category/create','home/category/edit/*') ? 'active-item':''}}"><a href="{{ route('create-category')}}">Add category</a></li>
                <li class="{{ request()->is('home/category') ? 'active-item':''}}"><a href="{{ route('manage-category')}}">Manage category</a></li>
            </ul>
        </li>



    <!--Sub Category-->
        <li class="has-child-item close-item {{ request()->is('home/subCategory*') ? 'open-item':''}}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Sub Category</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('home/subCategory/create','home/subCategory/edit/*') ? 'active-item':''}}"><a href="{{ route('create-sub_category')}}">Add SubCategory</a></li>
                <li class="{{ request()->is('home/subCategory') ? 'active-item':''}}"><a href="{{ route('manage-sub_category')}}">Manage SubCategory</a></li>
            </ul>
        </li>

         {{-- <!-- Agricultural Problems -->
         <li class="has-child-item close-item {{ request()->is('problems/*') ? 'open-item':''}}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Agricultural Problems </span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('problems/create','problems/edit/*') ? 'active-item':''}}"><a href="{{ route('problems.create')}}">Crops Problems</a></li>
                <li class="{{ request()->is('problems/all') ? 'active-item':''}}"><a href="{{ route('problems.index')}}">All Problems</a></li>
            </ul>
        </li>


        <!-- Agricultural Solutios -->
        <li class="has-child-item close-item {{ request()->is('solutions/*') ? 'open-item':''}}">
           <a><i class="fa fa-list" aria-hidden="true"></i><span>Agricultural Slotution </span> </a>
           <ul class="nav child-nav level-1">
               <li class="{{ request()->is('solutions/create','solutions/edit/*') ? 'active-item':''}}"><a href="{{ route('solutions.create')}}"> Problem Solutions</a></li>
               <li class="{{ request()->is('solutions/all') ? 'active-item':''}}"><a href="{{ route('solutions.index')}}">All Solution</a></li>
           </ul>
       </li>

--}}


        <!--PAGES-->
        <li class="has-child-item close-item">
            <a><i class="fa fa-files-o" aria-hidden="true"></i><span>Pages</span></a>
            <ul class="nav child-nav level-1">
                <li><a href="pages_sign-in.html">Sign in</a></li>
                <li><a href="pages_register.html">Register</a></li>
                <li><a href="pages_lock-screen.html">Lock screen</a></li>
                <li><a href="pages_forgot-password.html">Forgot password</a></li>
                <li class="has-child-item close-item">
                    <a>Error pages</a>
                    <ul class="nav child-nav level-2 ">
                        <li><a href="pages_error-404-content.html">Error 404 content</a></li>
                        <li><a href="pages_error-404.html">Error 404 page</a></li>
                        <li><a href="pages_error-500.html">Error 500</a></li>
                    </ul>
                </li>
                <li><a href="pages_faq.html">FAQ</a></li>
                <li><a href="pages_user-profile.html">User profile</a></li>
                <li class="has-child-item close-item">
                    <a>Search results<span></a>
                    <ul class="nav child-nav level-2 ">
                        <li><a href="pages_search-results-list.html">List style</a></li>
                        <li><a href="pages_search-results-grid.html">Grid Style</a></li>
                    </ul>
                </li>
                <li class="has-child-item close-item">
                    <a>Projects<span></a>
                    <ul class="nav child-nav level-2 ">
                        <li><a href="pages_project-list.html">List</a></li>
                        <li><a href="pages_project-detail.html">Detail</a></li>
                    </ul>
                </li>

            </ul>
        </li>

    </ul>
</nav>

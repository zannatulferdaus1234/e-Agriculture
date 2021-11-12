<nav>
    <ul class="nav nav-left-lines" id="main-nav">
        <!--HOME-->
        <li class="{{ request()->is('home') ? 'active-item' : '' }}"><a href="{{ route('home') }}"><i
                    class="fa fa-home" aria-hidden="true"></i><span>Home</span></a></li>



        <!--Category-->
        <li class="has-child-item close-item {{ request()->is('category*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Category</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('category/add', 'category/edit/*') ? 'active-item' : '' }}"><a
                        href="{{ route('create-category') }}">Add category</a></li>
                <li class="{{ request()->is('category') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-category') }}">Manage category</a></li>
            </ul>
        </li>



        <!--Sub Category-->
        <li class="has-child-item close-item {{ request()->is('subCategory*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Sub Category</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('subCategory/add', 'subCategory/edit/*') ? 'active-item' : '' }}"><a
                        href="{{ route('create-sub_category') }}">Add SubCategory</a></li>
                <li
                    class="{{ request()->is('subCategory', 'subCategory/*/images/show', 'subCategory/*/images/add', 'subCategory/*/question/show', 'subCategory/*/question/add') ? 'active-item' : '' }}">
                    <a href="{{ route('manage-sub_category') }}">Manage SubCategory</a></li>
            </ul>
        </li>


        <!--content-->
        <li class="has-child-item close-item {{ request()->is('contents*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Content</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('contents/add', 'subCategory/edit/*') ? 'active-item' : '' }}"><a
                        href="{{ route('create-content') }}">Add Content</a></li>
                <li class="{{ request()->is('contents', 'contents/*/edit') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-content') }}">Manage Content</a></li>
            </ul>
        </li>

        <!--All Comment-->
        <li class="has-child-item close-item {{ request()->is('comments*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Comment</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('contents', 'contents/*/edit') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-content') }}">Add Comment</a></li>

                <li
                    class="{{ request()->is('comments', 'comment/show', 'content/*/comment/*/edit') ? 'active-item' : '' }}">
                    <a href="{{ route('manage-comments') }}">Manage Comment</a></li>
            </ul>
        </li>

        <!--All Replies-->
        <li class="has-child-item close-item {{ request()->is('replies*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Replies</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('comment/3/reply/add') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-comments') }}">Add Reply</a></li>

                <li class="{{ request()->is('replies') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-reply') }}">Manage Reply</a></li>
            </ul>
        </li>

        <!-- Question-->
        <li class="has-child-item close-item {{ request()->is('questions*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Question</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('questions/add', 'questions/*/edit') ? 'active-item' : '' }}"><a
                        href="{{ route('create-crops_question') }}">Add Question</a></li>
                <li class="{{ request()->is('questions') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-crops_question') }}">All Question</a></li>
            </ul>
        </li>

        <!-- Solutions-->
        <li class="has-child-item close-item {{ request()->is('solutions*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Solutions</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('questions/add', 'questions/*/edit') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-crops_question') }}">Add Solution</a></li>
                <li class="{{ request()->is('solutions*') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-crops_solution') }}">All Solutions</a></li>
            </ul>
        </li>

        <!--Project-->
        <li class="has-child-item close-item {{ request()->is('project*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>Project</span> </a>
            <ul class="nav child-nav level-1">
                <li class="{{ request()->is('project/add', 'project/edit/*') ? 'active-item' : '' }}"><a
                        href="{{ route('create-project') }}">Add project</a></li>
                <li class="{{ request()->is('project') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-project') }}">Manage project</a></li>
            </ul>
        </li>



        <!--counter category-->
        <li class="has-child-item close-item {{ request()->is('counter_category*') ? 'open-item' : '' }}">
            <a><i class="fa fa-list" aria-hidden="true"></i><span>CounterCategory</span> </a>
            <ul class="nav child-nav level-1">
                <li
                    class="{{ request()->is('counter_category/create', 'counter_category/edit/*', 'counter_category/add/*') ? 'active-item' : '' }}">
                    <a href="{{ route('create-counterCategory') }}">Add CounterCategory</a></li>
                <li class="{{ request()->is('counter_category') ? 'active-item' : '' }}"><a
                        href="{{ route('manage-counterCategory') }}">Manage CounterCategory</a></li>
            </ul>
        </li>



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

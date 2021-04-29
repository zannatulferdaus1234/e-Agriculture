<div class="page-header">
    <!-- LEFTSIDE header -->
    <div class="leftside-header">
        <div class="logo">
            <a href="{{ route('home') }}" class="on-click">
            <img alt="logo" src="{{ asset('/') }}assets/e-agri.png" >
            </a>
        </div>
        <div id="menu-toggle" class="visible-xs toggle-left-sidebar" data-toggle-class="left-sidebar-open" data-target="html">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <!-- RIGHTSIDE header -->
    <div class="rightside-header">
        <div class="header-middle"></div>
        <!--SEARCH HEADERBOX-->
        <div class="header-section" id="search-headerbox">
            <input type="text" name="search" id="search" placeholder="Search...">
            <i class="fa fa-search search" id="search-icon" aria-hidden="true"></i>
            <div class="header-separator"></div>
        </div>

        <!--USER HEADERBOX -->
        <div class="header-section" id="user-headerbox">
            <div class="user-header-wrap">
                <div class="user-photo">
                    <img alt="profile photo" src="{{ asset('/') }}assets/admin/images/avatar/avatar_user.jpg" />
                </div>
                <div class="user-info">
                    <span class="user-name">{{ Auth::User()->name}} </span>
                    <span class="user-profile">Admin</span>
                </div>
                <i class="fa fa-plus icon-open" aria-hidden="true"></i>
                <i class="fa fa-minus icon-close" aria-hidden="true"></i>
            </div>
            <div class="user-options dropdown-box">
                <div class="drop-content basic">
                    <ul>
                        <li> <a href="pages_user-profile.html"><i class="fa fa-user" aria-hidden="true"></i> Profile</a></li>
                        <li> <a href="pages_lock-screen.html"><i class="fa fa-lock" aria-hidden="true"></i> Lock Screen</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-separator"></div>

        <!--Log out -->
        <div class="header-section">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <x-jet-responsive-nav-link href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                    <i class="fa fa-sign-out log-out" aria-hidden="true"></i>
                </x-jet-responsive-nav-link>
            </form>
        </div>


    </div>
</div>

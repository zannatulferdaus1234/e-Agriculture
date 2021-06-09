<div class="main-header">
    <div class="container">
        <div class="row">

            <!--logo -->
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <div class="logo"><a href="home.html">
                    <img src="assets/images/logo.png" alt=""> </a>
                </div>
            </div>

            <!-- search-area -->
            <div class="col-xs-12 col-sm-12 col-md-7 top-search-holder">
                <div class="search-area">
                    <form>
                        <div class="control-group">
                            <ul class="categories-filter animate-dropdown">
                                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="category.html">
                                    Categories <b class="caret"></b></a>
                                    <ul class="dropdown-menu" role="menu">
                                        {{-- @foreach($category as $category) --}}
                                        <li class="menu-header">Name</li>
                                        {{-- @endforeach --}}
                                    </ul>
                                </li>
                            </ul>

                            <input class="search-field" placeholder="Search here..."/>
                            <a class="search-button" href="#"></a>
                        </div>
                    </form>
                </div>
            </div>



            <!-- User Login / Register -->

            <div class="col-xs-12 col-sm-12 col-md-2 animate-dropdown top-cart-row">
                <div class="">
                    {{-- <a href="{{ route('user-register') }}" class="btn-upper btn btn-register ">Login / Register </a> --}}
                </div>
            </div>



        </div>
    </div>
</div>

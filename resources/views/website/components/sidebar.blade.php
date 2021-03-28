
<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw">
        </i> Categories</div>

    <nav class="yamm megamenu-horizontal">
        <ul class="nav">
            @foreach($category as $category)
            <li class="dropdown menu-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon fa fa-shopping-bag" aria-hidden="true"></i>
                {{ $category->name}}</a>
                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <ul class="links list-unstyled">
                                    @foreach($category->sub_category as $sub_category)
                                    <li><a href="#">{{ $sub_category->name}}</a></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>
            @endforeach
        </ul>
    </nav>

</div>


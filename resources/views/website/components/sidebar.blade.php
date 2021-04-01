<div class="side-menu animate-dropdown outer-bottom-xs">
    <div class="head"><i class="icon fa fa-align-justify fa-fw">
        </i> Categories</div>


<!-- categotry list -->

    <nav class="yamm megamenu-horizontal">
        <ul class="nav">

            @forelse($category as $category)
            <li class="dropdown menu-item"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <i class="icon fa fa-shopping-bag" aria-hidden="true"></i>
                {{ ucfirst($category->name) }}</a>

                <ul class="dropdown-menu mega-menu">
                    <li class="yamm-content">
                        <div class="row">
                            <div class="col-sm-12 col-md-3">
                                <ul class="links list-unstyled">

                                    @forelse ( $category->sub_category as $sub_category )
                                        <li><a href="{{ route('show-category',$sub_category-> name)}}">{{ ucfirst($sub_category->name) }}</a></li>
                                    @empty
                                        <li>No Items found</li>
                                    @endforelse

                                </ul>
                            </div>
                        </div>
                    </li>
                </ul>
            </li>

            @empty
                <p class="my-5 text-danger">No Category Inserted Yet !!! </p>
            @endforelse

        </ul>
    </nav>

</div>

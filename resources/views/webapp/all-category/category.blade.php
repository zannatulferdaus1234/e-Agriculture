@forelse ($categories as $category)
    <div class="col-md-4 col-sm-6">

        <div class="ser-box">
            <div class="ser-thumb">
                <img src="{{ asset('/storage/' . $category->image) }}" alt="">
            </div>
            <div class="ser-txt">
                <h5> <a href="{{ route('all-sub_category', $category->name) }}">{{ ucfirst($category->name) }} </a>
                </h5>
                <div class="pb-4">
                    <a href="{{ route('all-sub_category', $category->name) }}"><span class="aicon "><i
                                class="fas fa-arrow-right"></i></span></a>
                </div>
            </div>
        </div>

    </div>

@empty <h3>Sorry! No items found </h3>
@endforelse

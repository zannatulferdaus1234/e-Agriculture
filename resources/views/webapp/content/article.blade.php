<section class="wf100 p80 blog">
    <div class="blog-grid">
        <div class="container">

            <div class="row">
                <div class="col-md-6">
                    <div class="section-title-2">
                        <h5>Read Our Latest</h5>
                        <h2>Contents</h2>
                    </div>
                </div>
                <div class="col-md-6"> <a href="{{ route('all_category') }}" class="view-more">View All Categories</a>
                </div>
            </div>

            <div class="row">

                @forelse($contents as $content)
                    <!--Blog Small Post Start-->
                    <div class="col-md-4 col-sm-6">
                        <div class="blog-post">
                            <div class="blog-thumb" style="height:12rem;"> <a href="#"><i class="fas fa-link"></i></a>
                                <img src="{{ URL::to('/storage/' . $content->image) }}" alt="">
                            </div>
                            <div class="post-txt">
                                <h5><a
                                        href="{{ route('single_content', [$content->sub_category->name, $content->id]) }}">{{ Str::limit(ucfirst($content->title), 25) }}</a>
                                </h5>
                                <ul class="post-meta">
                                    <li><i class="fas fa-calendar-alt"></i>
                                        {{ $content->created_at->format('d M, Y') }}
                                    </li>
                                    <li><i class="fas fa-comments"></i> {{ count($content->comment) }} Comments</li>
                                </ul>

                                <p>{{ Str::limit(ucfirst($content->details), 120) }}</p>
                                <a href="{{ route('single_content', [$content->sub_category->name, $content->id]) }}"
                                    class="read-post">Read Post</a>

                            </div>
                        </div>
                    </div>
                @empty <h2> No items found </h2>
                @endforelse


            </div>
            <div class="d-flex justify-content-center">
                {{ $contents->links('webapp.pagination.pagination') }}
            </div>


        </div>
    </div>
</section>

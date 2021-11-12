<div class="blog-single-thumb"><img src="{{ URL::to('/storage/' . $content->image) }}" alt="content-image"></div>
<h3>{{ ucfirst($content->title) }}</h3>
<ul class="post-meta">
    <li><i class="fas fa-calendar-alt"></i>{{ $content->created_at->format('d M Y, D') }}</li>
    <li><i class="fas fa-comments"></i>{{ count($content->comment) }} Comments</li>
    <li class="tags"><i class="fas fa-tags"></i> <a
            href="{{ route('all-content', $content->sub_category->name) }}">{{ ucfirst($content->sub_category->name) }}</a>
    </li>
</ul>
<p>{{ ucfirst($content->details) }}</p>

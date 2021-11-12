@if ($paginator->hasPages())

    <div class="gt-pagination">
        <nav>
            <ul class="pagination">

                @if ($paginator->onFirstPage())
                    <li class="page-item disabled"> <a class="page-link" aria-label="Previous"> <i
                                class="fas fa-angle-left"></i> </a> </li>
                @else
                    <li class="page-item"> <a class="page-link disabled" href="{{ $paginator->previousPageUrl() }}"
                            rel="prev" aria-label="Previous"> <i class="fas fa-angle-left"></i> </a> </li>
                @endif

                @foreach ($elements as $element)

                    @if (is_string($element))
                        <li class="page-item disabled"><a class="page-link" href="#">{{ $element }}</a></li>
                    @endif

                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active"><a class="page-link" href="#">{{ $page }}</a></li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-item"> <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"
                            aria-label="Next"> <i class="fas fa-angle-right"></i> </a> </li>
                @else
                    <li class="page-item disabled"> <a class="page-link " aria-label="Next"> <i
                                class="fas fa-angle-right"></i> </a> </li>
                @endif

            </ul>
        </nav>
    </div>
@endif

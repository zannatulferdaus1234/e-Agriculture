<section class="services-area wf100">
    <div class="container">
        <ul>
            @forelse($projects as $projects)

                @if ($projects['star'] == 1)
                    <a href="{{ route('all-project') }}">
                        <li>
                            <div class="sinfo">
                                <img src="{{ asset('/') }}assets/webapp/images/sericon1.png" alt="">
                                <h6>{{ $projects->title }}</h6>
                                <p>Waste Management</p>
                            </div>
                        </li>
                    </a>
                @endif

            @empty
            @endforelse


            <!--box  end-->
        </ul>
    </div>
</section>

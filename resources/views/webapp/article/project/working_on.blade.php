<section class="wf100 p80 current-projects">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-title-2">
                    <h5>We are working these</h5>
                    <h2>Current Projects</h2>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tab-content" id="myTabContent">
                    <!--WildLife Slider Start-->
                    <div class="tab-pane fade show active" id="wildlife" role="tabpanel" aria-labelledby="wildlife-tab">
                        <div class="cpro-slider owl-carousel owl-theme">


                            @forelse($projects as $projects)
                                <div class="item">
                                    <div class="pro-box">
                                        <img src="{{ asset('/storage/' . $projects->image) }}" alt="">
                                        <h5>{{ ucfirst($projects->title) }}</h5>
                                        <div class="pro-hover">
                                            <h6>{{ ucfirst($projects->title) }}</h6>
                                            <p>{{ Str::limit(ucfirst($projects->details), 63) }}</p>
                                            <a href="{{ route('project_details', $projects->id) }}">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            @empty <h2>No item found</h2>
                            @endforelse

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


{{-- <h6>Recycling & Waste Management</h6>
<h6>Solar & Wind Energy </h6>
<h6>Saving Wildlife  & their Cubs  </h6>
                                        <h6>Forest & Tree Planting</h6>


<p>We are working over 20 years on Waste Management & Material Recycling Projects.</p>

<p>We are working over 20 years on Waste Management & Material Recycling Projects.</p>

<p>We are working over 20 years on Waste Management & Material Recycling Projects.</p>

<p>We are working over 20 years on Waste Management & Material Recycling Projects.</p> --}}

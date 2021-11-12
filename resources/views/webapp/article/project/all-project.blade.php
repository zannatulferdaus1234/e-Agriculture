@extends('webapp.layout.main-layout')

@section('content')

    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Projects</h1>
            <ul>
                <li><a href="{{ route('webapp') }}">Home</a></li>
                <li><a href="javascript:avoid(0)"> Projects </a></li>
            </ul>
        </div>
    </section>
    <!--Inner Header End-->
    <!--Causes Start-->
    <section class="wf100 p80 projects">
        <div class="projects-grid-two">
            <div class="container">
                <div class="row">
                    @forelse($projects as $project)
                        <div class="col-md-4 col-sm-6">
                            <div class="pro-box">
                                <img src="{{ asset('/storage/' . $project->image) }}" alt="">
                                <h5>{{ ucfirst($project->title) }}</h5>
                                <div class="pro-hover">
                                    <h6>{{ ucfirst($project->title) }}</h6>
                                    <p>{{ Str::limit(ucfirst($project->details), 100) }}</p>
                                    <a href="{{ route('project_details', $project->id) }}">Read More</a>
                                </div>
                            </div>
                        </div>

                    @empty <h2>No items Found</h2>
                    @endforelse


                    <!--Project box End-->
                </div>

            </div>
            <div class="d-flex justify-content-center">
                {{ $projects->links('webapp.pagination.pagination') }}
            </div>
        </div>
    </section>

@endsection

@extends('webapp.layout.main-layout')

@section('content')

    <section class="wf100 p100 inner-header">
        <div class="container">
            <h1>Projects</h1>
            <ul>
                <li><a href="{{ route('webapp') }}">Home</a></li>
                <li><a href="javascript:avoid(0)"> Categories </a></li>
            </ul>
        </div>
    </section>

    <section class="wf100 p80 blog">
        <div class="projects-grid">
            <div class="container">
                <div class="row">

                    @include('webapp.all-category.category')

                </div>
            </div>

            <div class="d-flex justify-content-center">
                {{ $categories->links('webapp.pagination.pagination') }}
            </div>

        </div>
    </section>

@endsection

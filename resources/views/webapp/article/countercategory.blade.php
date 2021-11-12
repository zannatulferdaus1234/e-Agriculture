<div class="home-facts counter pt80">
    <div class="container">
        <div class="row">

            @forelse($counterCategory as $counterCategory)
            <div class="col-lg-3 col-sm-6 col-md-3 mb-5">
                <div class="counter-box">
                    <p class="counter-count">{{$counterCategory->counter}}</p>
                    <p class="ctxt">{{$counterCategory->title}}</p>
                </div>
            </div>
            @empty
            @endforelse


        </div>
    </div>
</div>

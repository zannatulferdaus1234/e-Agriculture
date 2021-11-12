<section class="home2-about wf100 p100 gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="video-img"> <img src="{{ asset('/') }}assets/webapp/images/aboutimg.jpg" alt=""></div>
            </div>
            <div class="col-md-7">
                <div class="h2-about-txt">
                    <h3>About e-Agriculture</h3>
                    <h2>Eco-friendly products can be made from scratch.</h2>
                    <p> If anything’s hot in today’s economy, it’s saving money, including a broad range of green
                        businesses helping people save energy, water, and other resources. </p>
                    <a class="aboutus" href="{{ route('about_us') }}">More About us</a>
                </div>
            </div>
        </div>
    </div>

    @includeIf('webapp.article.countercategory')

</section>

@extends('webapp.layout.main-layout2')

@section('content')

<!--Slider Start-->

@includeIf('webapp.article.slider')

<!--Slider End-->
<!--Service Area Start-->
@includeIf('webapp.article.project.famous_project')
<!--Service Area End-->

<!--About Section Start-->
@includeIf('webapp.article.about.simple_about')
<!--About Section End-->

<!--Urgent Causes Start-->
@includeIf('webapp.article.donation')
<!--Urgent Causes End-->

<!--Current Projects Start-->
@includeIf('webapp.article.project.working-on')
<!--Current Projects End-->

<!--News & Articles Start-->
@includeIf('webapp.article.article')
<!--News & Articles End-->
<!--Why Ecova + Facts Start-->
@includeIf('webapp.article.why-choose-us')
<!--Why Ecova + Facts End-->

<!--Online Products Start-->
<section class="online-shop wf100 p80">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="section-title-2 text-center">
               <h5>Read Our Latest</h5>
               <h2>News &amp; Articles</h2>
            </div>
         </div>
      </div>

   </div>
</section>


@endsection

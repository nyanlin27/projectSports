@extends('frontend_master')

@section('content')

<!--// Main Content \\-->
<div class="sportsmagazine-main-content">

<!--// Main Section \\-->
<div class="sportsmagazine-main-section sportsmagazine-faq-full">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="sportsmagazine-fancy-title-two"><h2>Our FAQ <span></span></h2></div>
                <div class="panel-group sportsmagazine-accordion" id="accordion" role="tablist" aria-multiselectable="true">
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingOne">
                        <h4 class="panel-title">
                           <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                           Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condimentum odio.
                       </a>
                        </h4>
                     </div>
                     <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                        <div class="panel-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingTwo">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                           Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condimentum odio.
                       </a>
                        </h4>
                     </div>
                     <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                        <div class="panel-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingThree">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                           Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condimentum odio.
                       </a>
                        </h4>
                     </div>
                     <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                        <div class="panel-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingFour">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                           Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condimentum odio.
                       </a>
                        </h4>
                     </div>
                     <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                        <div class="panel-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                        </div>
                     </div>
                  </div>
                  <div class="panel panel-default">
                     <div class="panel-heading" role="tab" id="headingFive">
                        <h4 class="panel-title">
                           <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                           Sed gravida, urna quis tempus sollicitudin, tellus urna suscipit nisl, id rhoncus ligula elit condimentum odio.
                       </a>
                        </h4>
                     </div>
                     <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                        <div class="panel-body">
                           <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut ac malesuada ante. Curabitur lacinia diam tempus tempor consectetur. Sed vitae dignissim purus, eget aliquam libero. Duis et arcu a erat venenatis ornare eget nec urna.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>


        </div>
    </div>
</div>
<!--// Main Section \\-->

<!--// Main Section \\-->
<div class="sportsmagazine-main-section">
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <!--// Partner \\-->
                <div class="sportsmagazine-fancy-title-two"><h2>Our Partners <span></span></h2></div>
                <div class="sportsmagazine-partner-slider">
                    <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-1.jpg ')}}" alt=""></a> </div>
                    <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-2.jpg ')}}" alt=""></a> </div>
                    <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-3.jpg ')}}" alt=""></a> </div>
                    <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-1.jpg ')}}" alt=""></a> </div>
                    <div> <a href="404.html"><img src="{{asset('frontend_asset/extra-images/partner-logo-3.jpg ')}}" alt=""></a> </div>
                </div>
                <!--// Partner \\-->
            </div>

        </div>
    </div>
</div>
<!--// Main Section \\-->

</div>
<!--// Main Content \\-->


@endsection
    <section id="slider"><!--slider-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
                        @php
                            $result = DB::table('sliders')->get(); 
                            $i = 1;
                            $j = 0;
                        @endphp
                        <ol class="carousel-indicators"> 
                        @foreach ($result as $row) 
                            <li data-target="#slider-carousel" data-slide-to="{{$j}}" class=" @if ($i==0) {{'active'}} @endif"></li>
                            @php
                                $j++;
                            @endphp
                        @endforeach
                        </ol>  
                        <div class="carousel-inner">
                            @foreach ($result as $row) 
                            
                            <div class="item @if ($i==1) {{'active'}} @endif">
                                <div class="col-sm-6">
                                    <h1><span>E</span>-SHOPPER</h1>
                                    <h2>{{$row->slider_name}}</h2>
                                    <p>{!!str_limit($row->slider_desc,500)!!}</p>
                                    <button type="button" class="btn btn-default get">{{$row->slider_button}}</button>
                                </div>
                                <div class="col-sm-6">
                                    <img src="{{$row->slider_img}}" class="girl img-responsive" alt="" height="486" width="444" />
                                    {{-- <img src="{{url('Frontend')}}/images/home/pricing.png"  class="pricing" alt="" /> --}}
                                </div>
                            </div>
                            @php
                                $i++;
                            @endphp
                            @endforeach 
                            
                        </div>
                        
                        <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
        </div>
    </section><!--/slider-->
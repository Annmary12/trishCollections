@extends('layouts.app')

@section('content')
<style type="text/css">
    .product-desc{
        text-align:center;
        padding-top: 20px;
        text-transform: capitalize;
        font-size: 15px;
    }

    .price{
        text-align: center;
        color: #00695c;
    }

    .desc{
        padding:10px 0 10px 0;
    }
</style>
    
<div class="row">
                    <!-- Tab panels -->
                  
        <div class="section" id="carousel">
                    <div class="col-md-12">

                        <!-- Carousel Card -->
                        <div class="card card-raised card-carousel">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <div class="carousel slide" data-ride="carousel">

                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                        <!-- <li data-target="#carousel-example-generic" data-slide-to="2"></li> -->
                                    </ol>

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner">
                                        <div class="item active">
                                            <img src="img/img1.jpg" alt="Awesome Image">
                                            <div class="carousel-caption">
                                                <h4>fashion is the armor to survive the reality of everyday life</h4>
                                            </div>
                                        </div>
                                        <div class="item">
                                            <img src="img/img2.jpg" alt="Awesome Image">
                                            <div class="carousel-caption">
                                                <h4>life is too short to wear boring cloths</h4>
                                            </div>
                                        </div>
                                    
                                    </div>

                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                        <i class="material-icons">keyboard_arrow_left</i>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                        <i class="material-icons">keyboard_arrow_right</i>
                                    </a>
                                </div>
                            </div>
                        </div>
                </div>

           </div>
                            <!--/.First column-->
            

            <div class="row">

            <div class="row text-center">
                <div class="col-md-12 sub-product">
                    <h5 ><strong>Featured Products</strong></h5>
                </div>
            </div>

                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card"> 
                                    <img src="img/jacket1.jpg" class="image">  
                        
                    </div>
                    <div class="desc">
                        <div class="product-desc">brown jacket</div>
                        <div class="price"><strong>&#x20A6 3000</strong></div>
                    </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="card"> 
                                    <img src="img/jacket2.png" class="image">  
                        </div>
                        <div class="desc">
                            <div class="product-desc">corporate black jacket</div>
                            <div class="price"><strong>&#x20A6 3500</strong></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="card"> 
                                    <img src="img/jacket3.jpg" class="image">  
                        </div>
                        <div class="desc">
                            <div class="product-desc">pink jacket</div>
                            <div class="price"><strong>&#x20A6 2500</strong></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="card"> 
                                    <img src="img/jacket4.jpeg" class="image">  
                        </div>
                        <div class="desc">
                            <div class="product-desc">black jacket</div>
                            <div class="price"><strong>&#x20A6 2000</strong></div>
                        </div>
                    </div>

                    

                </div>
                <br>

                 <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <div class="card"> 
                                    <img src="img/shoe1.png" class="image" >  
                        
                    </div>
                    <div class="desc">
                            <div class="product-desc">silver shoe</div>
                            <div class="price"><strong>&#x20A6 2000</strong></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="card"> 
                                    <img src="img/shoe2.jpg" class="image" >  
                        </div>
                        <div class="desc">
                            <div class="product-desc">pink shoe</div>
                            <div class="price"><strong>&#x20A6 4000</strong></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="card"> 
                                    <img src="img/shoe3.jpg" class="image" >  
                        </div>
                        <div class="desc">
                            <div class="product-desc">black flat shoe</div>
                            <div class="price"><strong>&#x20A6 2500</strong></div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-md-3">
                        <div class="card"> 
                                    <img src="img/shoe5.jpg" class="image" >  
                        </div>
                        <div class="desc">
                            <div class="product-desc">black heel shoe</div>
                            <div class="price"><strong>&#x20A6 2000</strong></div>
                        </div>
                    </div>

                   
                </div>
               
            
        </div>
</div>


                                
@endsection
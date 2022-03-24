@extends('layout.master')

@section('styles')
<style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Josefin Sans', sans-serif;
        }
        .t
        {
            min-height:40px;
            line-height:40px;
            text-align:center;
        }
        .t span a
        {
            color:black;
            text-decoration:none;
        }
        .t span a:hover
        {
            text-decoration:none;
        }
        .social .fa
        {
            margin-left:12px;
            font-size:18px;
            height:25px;
            width:25px;
            padding-top:1%;
            transition:all ease .5s;
        }
        .social .fa:hover
        {
            background: #fda72b;
            transition:all ease .5s;
            color:white;
            border-radius: 50%;
        }

        .logo
        {
            font-size:38px;
        }
        .txt
        {
            height:40px;
        }
        .c
        {
            margin-right:3%;
        }
        .navbar-toggler
        {
            background: #fda72b ;
        }
        #menu li a
        {
            color: #7f7f7f;
        }
        #menu li a:hover
        {
            color: #fda72b;
            transition:all ease 1s;
            padding-left:7px;
        }
        .icons
        {
            position:fixed;
            top:30%;
            left:0%;
            width:200px;
            display:flex;
            flex-direction:column;
            z-index:1;
        }
        .icons a
        {
            text-decoration:none;
            text-transform:uppercase;
            padding:5px;
            font-size:22px;
            font-family:active;
            text-align:right;
            color:white;
            border-radius:0px 50px 50px 0px;
            transform:translate(-145px,0px);
            transition:all ease 0.3s;
        }
        .icons a:hover
        {
            transform:translate(0px,0px);
            transition:all ease 0.5s;
        }
        .feedback
        {
            background:#fda72b;
            color:black;
        }
        .icons a:hover i
        {
            transform:rotate(360deg);
        }
        .icons a i
        {
            transition:all ease 0.5s;
            margin-left:15px;
            background:white;
            height:35px;
            width:35px;
            color:black;
            text-align:center;
            line-height:35px;
            border-radius:50px;
        }
        .icons a i.fa-comments-o
        {
            color:#fda72b;
        }
        .men a, .women a, .kid a{
            text-decoration: none;
        }

        .men a:hover, .women a:hover, .kid a:hover
        {
            text-decoration:none;
        }
        .men
        {
            background:url('images/cake10.jpg');
        }
        .women
        {
            background:url('images/cake6.jpg');
        }
        .kid
        {
            background:url('images/cake3.jpeg');
        }
            .men h5,.women h5,.kid h5
        {
            height:45px;
            background:#fda72b;
            color: white;
            width:100px;
            text-align:center;
            padding-top:2%;
            margin:33% auto;
        }

        .product
        {
            min-height:300px;
        }
        .btno
        {
            height:40px;
            width:120px;
            border:none;
            border: 2px solid #fda72b;
            padding:3%;
            color:#fda72b;
            text-decoration:none;
            text-align:center;
            border-radius:4px;
        }
        .btno:hover
        {
            text-decoration:none;
            color:#fda72b;
        }

        .ufooter{
        min-height:300px;
        border-bottom:1px solid #2ec194;
        }
        .bfooter{
        min-height:50px;
        }

        .fsocial .fa:hover{
            background:#fda72b;
            transition:all ease 0.5s;
        }
        .fsocial span{
            height:40px;
            width:40px;
            color:white;
            line-height:40px;
            margin-left:5px;
            background:silver;
            text-align:center;
            border-radius:50%;
            font-size:21px;
        }
        .fuicon:hover{
            text-decoration:none;
            color:#fda72b;
            transition:all ease 0.5s;
        }
        .fuicon{
            text-decoration:none;
            color:silver;
            transition:all ease 0.5s;
        }
        .icons
        {
            position:fixed;
            top:30%;
            left:0%;
            width:200px;
            display:flex;
            flex-direction:column;
            z-index:1;
        }
        .icons a
        {
            text-decoration:none;
            text-transform:uppercase;
            padding:5px;
            font-size:22px;
            font-family:active;
            text-align:right;
            color:white;
            border-radius:0px 50px 50px 0px;
            transform:translate(-145px,0px);
            transition:all ease 0.3s;
        }
        .icons a:hover
        {
            transform:translate(0px,0px);
            transition:all ease 0.5s;
        }
    </style>
@endsection

@section('main_content')
        <!-- start Slider-->

        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/cake7.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>First slide label</h5>
                  <p>Some representative placeholder content for the first slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/cake2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Second slide label</h5>
                  <p>Some representative placeholder content for the second slide.</p>
                </div>
              </div>
              <div class="carousel-item">
                <img src="images/cake7.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                  <h5>Third slide label</h5>
                  <p>Some representative placeholder content for the third slide.</p>
                </div>
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

        <!-- End Slider-->

        <!-- Feedback start-->

        <div class="icons">
            <a href="{{url('/feedback')}}"class="feedback">Feedback <i class="fa fa-comments-o"></i></a>
        </div>

        <!-- Feedback End-->

        <!--start cotagory-->

        <div class="row cat px-5">
            <div class="col-sm-4 px-3">
                <div class="row p-3">
                    <div class="col-sm-12 men">
                        <a href="#"><h5>Men's</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 px-3">
                <div class="row p-3">
                    <div class="col-sm-12 women">
                    <a href="#"><h5>Women's</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 px-3">
                <div class="row p-3">
                    <div class="col-sm-12 kid">
                        <a href="#"><h5>Kid's</h5></a>
                    </div>
                </div>
                </div>
        </div>

        <!--end cotagory-->

        <!--Our Products start-->

        <div class="row product py-4">
            <div class="col-sm-12 text-center">
                <h2 style="font-size:40px;padding-bottom:15px;font-family:active;">OUR <span style="color:#fda72b;">PRODUCTS <span class="fa fa-shopping-basket"></span></span></h2>
                <div class="row">
            <div class="col-md-3 col-sm-3">
                <div class="card mx-auto">
                    <img src="images/pr1.jpg" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">name</h5>
                    <p class="card-text"><span class="fa fa-inr"> disprice- <s style="color:red;">price-</s></span></p>
                    <a href="#" class="btno float-left">Add To Card</a>
                    <a href="#" class="btno float-right">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="card mx-auto">
                    <img src="{{asset('public/images/pr2.jpg')}}" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">name</h5>
                    <p class="card-text"><span class="fa fa-inr"> disprice- <s style="color:red;">price-</s></span></p>
                    <a href="#" class="btno float-right">Add To Card</a>
                    <a href="#" class="btno float-left">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="card mx-auto">
                    <img src="{{asset('public/images/pr3.jpg')}}" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">name</h5>
                    <p class="card-text"><span class="fa fa-inr"> disprice- <s style="color:red;">price-</s></span></p>
                    <a href="#" class="btno float-left">Add To Card</a>
                    <a href="#" class="btno float-right">Order Now</a>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-3">
                <div class="card mx-auto">
                    <img src="images/pr10.jpg" class="card-img-top" alt="..">
                    <div class="card-body">
                        <h5 class="card-title">name</h5>
                    <p class="card-text"><span class="fa fa-inr"> disprice- <s style="color:red;">price-</s></span></p>
                    <a href="#" class="btno float-left">Add To Card</a>
                    <a href="#" class="btno float-right">Order Now</a>
                    </div>
                </div>
            </div>
    
            </div>
            </div>
        </div>

        <!--Our Products End-->

        <!--Big Sale start-->

        <div class="container">
            <h1 class="text-center"><b style="font-family:active;">BIG <span style="color:#fda72b;">SALE <i class="fa fa-gift"></i></span></b></h1>
                    <div class="row">
                <div class="col-md-6 col-sm-6 px-5 py-3">
                    <img src="images/pr6.jpg" class="img-fluid rounded border">
                </div>
                    <div class="col-md-6 col-sm-6 px-5 py-3 text-center">
                        <p style="font-size:35px;margin-top:80px;color:#fda72b;">50% less in all items</p>
                        <p>Desirecart provide all items in less  50% , buy one get free one. Desirecart provides best sels offer buy one get two.
                        So now fastly shops items and enjoy. </p><br/>
                        <a class="btno" href="#">SHOP NOW</a>
                    </div>
                </div>
            </div>

        <!--Big Sale end-->
@endsection
        
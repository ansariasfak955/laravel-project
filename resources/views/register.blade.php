
@extends('layout.master')

@section('styles')
<style>
        body{
            padding: 0px;
            margin: 0px;
        }
        .register{
            background: #f7f7f7;
        }
        .themetext{
            color: #fbaf0c;
        }
        .sectionTitle{
            margin: 0px auto;
            padding: 0px;
            text-align: center;
            font-weight: 500;
            padding-bottom: 10px;
            position: relative;
        }
        .sectionTitle::after{
            content: '';
            height: 2px;
            width: 100px;
            background: #fbaf0c;
            display: inline-block;
            position: absolute;
            top: 70px;
            left: calc(50% - 50px);
            box-sizing: border-box;
        }
        .sectionText{
            color: #555;
            font-size: 14px;
            display: block;
            width: 100%;
            max-width: 600px;
            margin: 0px auto;
            margin-bottom: 20px;
            text-align: center;
            font-family: 'Verela Round', sans-serif;
        }
        .btn{
            color: white;
            height: 40px;
            width: 150px;
            background: #fbaf0c;
            left: calc(50% - 50px);
        }
    </style>
@endsection

@section('main_content')
<div class="container-fluid register">
        <div class="row">
            <div class="form1 ">
                <h3 class="sectionTitle py-4">Register <span class="themetext">With Us</span></h3>
                <p class="sectionText">You are just one step behind to join the Techpile. I promise you to give my best if you will ll be a part of Techpile.</p>
            </div>
        </div>

        <!--start form-->
<form action="{{url('register/save-user')}}" method="post">
        @csrf
            <div class="row justify-content-center" style="font-weight: 500;">
                <div class="col-sm-4">
                    Name :
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                        <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name">
                      </div>
                    
                </div>  
            </div>
            <div class="row justify-content-center" style="font-weight: 500;">
                <div class="col-sm-4">
                    Contact No :
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
                        <input type="text" class="form-control" placeholder="Mobile No" aria-label="Mobile" aria-describedby="basic-addon1" name="mobile">
                      </div>
                </div>  
            </div>
            <div class="row justify-content-center" style="font-weight: 500;">
                <div class="col-sm-4">
                    Email Id :
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <input type="text" class="form-control" placeholder="Email Id" aria-label="Username" aria-describedby="basic-addon1" name="email">
                      </div>
                    
                </div> 
              
            </div>
            <div class="row justify-content-center" style="font-weight: 500;">
                <div class="col-sm-4">
                    Email Id :
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o" aria-hidden="true"></i></span>
                        <input type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" name="password">
                      </div>
                    
                </div> 
              
            </div>
            <div class="row">
                  <div class="col-sm-2"></div>
                  <div class="col-sm-4 py-4">
                    <input type="submit" value="Register Now" style="background: #fbaf0c; border: none; color: white; width: 30%; height: 40px; border-radius: 3%;" name="submit"/>
                </div>   
                  </div>
                  <div class="col-sm-4"></div>
                  <div class="col-sm-2"></div>
    </form>
            </div>

        <!--end form-->
    </div>
@endsection
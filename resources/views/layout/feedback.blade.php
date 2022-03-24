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
        .divHeading{
            margin-top: 0px;
            font-size: 22px;
            margin-bottom: 4px;
            padding-bottom: 10px;
            position: relative;
        }
        .divHeading::after{
            content: '';
            height: 2px;
            width: 40px;
            background: #fbaf0c;
            display: block;
            position: absolute;
            bottom: 4px;
            left: 4px;
            box-shadow: -4px 0px 0px #555;
        }
        input.divBtn{
            background: #fff;
        }
        .divBtn{
            color: #fbaf0c;
            text-decoration: none;
            padding: 10px 30px;
            padding-top: 12px;
            border-radius: 4px;
            border: 1px solid #fbaf0c;
            margin-top: 5px;
            display: inline-block;
            transition: all ease .5s;
            position: relative;
            font-size: 13px;
            overflow: hidden;
        }
        .divBtn:hover{
            background: #fbaf0c;
            transition: all ease .5s;
            color: white;
        }
    </style>
@endsection

@section('main_content')
<div class="container-fluid register py-4">
        <div class="row">
            <div class="form1 ">
                <h3 class="sectionTitle py-4">Your Valuable <span class="themetext">Feedback</span></h3>
                <p class="sectionText">We appriciate to your Valuable Feedback and we are always focused on it.</p>
            </div>
        </div>

        <div class="container bg-white rounded pb-5 pr-5 pt-3">
            <div class="col text-center"></div>
            <div class="row flex-column-reverse flex-lg-row">
                <div class="col-sm-6 mt-4 img-fluid ps-5">
                    <img src="images/house.jpeg"/>
                </div>
                <div class="col-sm-6 mt-4 px-5">
                    <h4 class="divHeading">Add Your Feedback</h4>
                    <form class="form" method="post" >
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="mb-0 mt-3">Your Name :</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="mb-0 mt-3">Your Image :</label>
                                <div class="input-group mb-3">
                                    <input type="file" class="form-control" id="inputGroupFile03" aria-describedby="inputGroupFileAddon03" aria-label="Upload">
                                  </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="mb-0 mt-3">You're From</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Your College/Institute Name" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="mb-0 mt-3">Your Feedback :</label>
                                <div class="input-group">
                                    <textarea class="form-control" aria-label="With textarea" rows="4" placeholder="Your Valuable feedback*"></textarea>
                                  </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <input type="submit" class="divBtn" name="submit" value="SEND FEEDBACK"/>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
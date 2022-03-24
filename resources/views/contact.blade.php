@extends('layout.master')

@section('styles')
<style>
        *{
            box-sizing: border-box;
            margin: 0px;
            padding: 0px;
        }
        .newSection{
            padding: 30px 0px;
        }
        .bg-light{
            background: #f8f9fa;
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
            bottom: 3px;
            left: calc(50% - 50px);
        }
        .themeText{
            color: #fbaf0c;
        }
        .sectionContent{
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
            border:1px solid #fbaf0c;
            margin-top: 5px;
            display: inline-block;
            transition: all ease .5s;
            position: relative;
            font-size: 13px;
            overflow: hidden;
            }
            .divBtn:hover{
                background: #fbaf0c;
                color: white;
                transition: all ease .5s;
            }
            .contactLocation{
                padding: 40px;
                border: 1px solid #dedede;
                border-radius: 4px;
                background: #f8f9fa;
                border-bottom: 1px #dedede solid;
            }
            .contactLocation .contact{
                padding-top: 5px;
                padding-left: 50px;
                position: relative;
                color: #666;
            }
            .contactLocation .contact i{
                position: absolute;
                top: 10px;
                left: 10px;
                background: #fbaf0c;
                height: 30px;
                width: 30px;
                line-height: 30px;
                text-align: center;
                color: #fff;
                border-radius: 50%;
                border: 1px solid;
                border-color: #fff;
                font-size: 14px;
            }
            .contactLocation .contact strong{
                color: #fbaf0c;
                font-weight: 500;
                font-size: 16px;
                padding-bottom: 5px;
                display: block;
                position: relative;
            }
            .contactLocation .contact strong::after{
                content: '';
                height: 2px;
                width: 40px;
                background: #fbaf0c;
                display: block;
                position: absolute;
                bottom: 3px;
                left: 0px;
            }
            .contactLocation .contact p{
                margin-bottom: 1rem;

            }
            .contactLocation .contact p a{
                color: #555;
                display: block;
                margin-top: 5px;
                transition: .5s;
            }
            a{
                text-decoration: none;
                background-color: transparent;
                color: #fbaf0c;
            }
        
    </style>
    <link href="css/contact.css" rel="stylesheet" type="text/css"/>
@endsection

@section('main_content')
<div class="container-fluid newSection bg-light">
        <h3 class="sectionTitle"><span class="themeText">Contact</span> With Us</h3>
        <p class="sectionContent">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id repellendus dolore labore consequuntur sapiente libero!</p>
        
        <!--start form section-->

        <div class="container bg-white a rounded bp-5 pl-5 pr-5 pt-3 py-5">
            <div class="col text-center"> </div>
            <div class="row">
                <div class="col-sm-7 mt-4 ps-5">
                    <h4 class="divHeading">Send Your Message</h4>
                    <form class="form" method="post">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="mb-0 mt-3">Your Name :</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Your Name" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                            </div>
                            <div class="col-sm-6">
                                <label class="mb-0 mt-3">Your Contact :</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Your Contact Number" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="mb-0 mt-3">Your Email :</label>
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Username" aria-describedby="basic-addon1">
                                  </div>
                            </div>
                            <div class="col-sm-12">
                                <label class="mb-0 mt-3">Your Message :</label>
                                <div class="input-group">
                                    <textarea class="form-control" rows="4" aria-label="With textarea" placeholder="Type Your Message"></textarea>
                                  </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <input type="submit" class="divBtn" name="submit" value="SEND MESSAGE"/>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-sm-5 mt-4 pe-5 px-5">
                    <div class="col contactLocation">
                        <h4 class="divHeading">Contact Info</h4>
                        <div class="contact">
                            <i class="fa fa-map-marker"></i>
                            <strong>Office Address</strong>
                            <p>
                                Word No. 11 Smit Enter College Road,
                                <br/>
                                Word No. 11 Alinagar Azmatgarh
                                <br/>
                                Utter Pradesh 276124
                            </p>
                        </div>
                        <div class="contact">
                            <i class="fa fa-phone"></i>
                            <strong>Call Us</strong>
                            <a href="tel:+91 8853507105">+91 8853507105</a><br/>
                            <a href="tel:+91 6389862926">+91 6289862926</a>
                        </div>
                        <div class="contact">
                            <i class="fa fa-envelope"></i>
                            <strong>Mail Us</strong>
                            <p>
                                <a href="mailto:ansariasfak955@gmail.com">ansariasfak955@gmail.com</a>
                                <a href="mailto:ansariasfak955@gmail.com">ansariasfak955@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--end form section-->
    </div>

@endsection
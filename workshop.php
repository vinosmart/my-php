<!doctype html>

<html class="no-js" lang="en">

<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Buff Creative College</title>

    <meta name="description" content="">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="https://www.buffinstituteofdesign.com/wp-content/uploads/2020/06/fav-icon-150x150.jpg" sizes="32x32" />

    <link rel="icon" href="https://www.buffinstituteofdesign.com/wp-content/uploads/2020/06/fav-icon-300x300.jpg" sizes="192x192" />

    <link rel="apple-touch-icon" href="https://www.buffinstituteofdesign.com/wp-content/uploads/2020/06/fav-icon-300x300.jpg" />

    <meta name="msapplication-TileImage" content="https://www.buffinstituteofdesign.com/wp-content/uploads/2020/06/fav-icon-300x300.jpg" />

    <link rel="stylesheet" href="assets/css/preloader.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/meanmenu.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/animate.min.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/owl.carousel.min.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/swiper-bundle.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/backToTop.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/magnific-popup.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/huicalendar.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/nice-select.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/flaticon.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/default.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/lightgallery.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/style.css?ver=1.2">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Roboto:wght@500&display=swap" rel="stylesheet">
    <style>
        .folio-holder {
            position: relative;
            /* width: 50%; */
        }

        .folio-img {
            opacity: 1;
            display: block;
            /* width: 100%;
            height: auto; */
            transition: .5s ease;
            backface-visibility: hidden;

        }

        .folio-mid {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .folio-holder:hover .folio-img {
            opacity: 0.3;
            cursor: pointer;
        }

        .folio-holder:hover .folio-mid {
            opacity: 1;
        }

        .folio-btn {
            height: 50px;
            line-height: 50px;
            text-align: center;

            font-weight: 600;
            color: #141517;
            background-color: #FFB013;
            padding: 0 40px;
            cursor: pointer;
            border-radius: 50px;
        }

        .folio-btn:hover {

            background-color: #086AD8;
            color: #ffffff;
        }

        .folio-btn a {
            text-decoration: none;
            color: white;
            font-size: 14px;
            display: block;
        }

        * {
            box-sizing: border-box;
        }

        .m-mt-35 {
            margin-top: -35px;
        }

        .course-info {
            color: #141517;
            font-size: 16px;
            font-weight: 600;
            background-color: #FFB013;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            display: inline-block;
        }

        .course-info:hover {
            background-color: #32ac6e;
            color: #fff !important;
        }

        .online-info {
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            background-color: #0a58ca;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
            display: inline-block;
        }

        .online-info:hover {
            background-color: #32ac6e;
            color: #fff !important;
        }

        .emi-txt {
            font-size: 14px;
            margin-bottom: 0px;
            font-weight: normal;
            color: #575757;
            line-height: 26px;
        }

        .date {
            font-family: 'Roboto', sans-serif !important;
        }

        .b-left {
            border-left: 1px solid #ffc728;
        }

        .f-date {
            color: #000;
            font-family: 'Roboto', sans-serif !important;
            font-size: 40px;
            font-weight: 100;
            display: block !important;
            /* padding: 10px;  */
            text-align: center;
            /* width: 100%; */
        }

        .f-text {
            font-family: 'Roboto', sans-serif !important;
            color: #806314;
            display: block !important;
            font-size: 20px;
            font-weight: 300;
            text-align: center;
        }

        .pricing-head {
            background: #3eb5ac !important;
            color: #fff;
            padding: 20px;
        }

        .p-htitle {
            font-family: 'Open Sans', sans-serif !important;
            font-weight: 400 !important;
            font-style: normal !important;
            letter-spacing: 2px !important;
            font-size: 36px !important;
            ;
            color: #fff !important;
            ;
        }

        .p-stitle {
            font-family: 'Roboto', sans-serif !important;
            font-weight: 300 !important;
            font-style: normal !important;
            letter-spacing: 2px !important;
            font-size: 16px !important;
            ;
            color: #fff !important;
            ;
        }

        .ls-2 {
            letter-spacing: 2px;
        }

        .edo-course-sec-btn {
            display: inline-block;
            height: 55px;
            line-height: 55px;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            background-color: #086AD8;
            padding: 0px 60px;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        #dis .dis-icon:hover {
            color: #0a58ca !important;
            cursor: pointer;
            -webkit-transition: all 0.3s ease-out 0s;
            -moz-transition: all 0.3s ease-out 0s;
            -ms-transition: all 0.3s ease-out 0s;
            -o-transition: all 0.3s ease-out 0s;
            transition: all 0.3s ease-out 0s;
        }

        /*
        #dis-table table {
            width: 100%;
            max-width: 50rem;
        }

        #dis-table table tr:nth-child(even) th {
            color: #ccc;
            font-weight: normal;
        }

        #dis-table table th,
        table td {
            padding: 0.5rem 1rem;
        }

        #dis-table table th {
            font-weight: normal;
            border-top: thin dotted #ccc;
        }

        #dis-table table td {
            font-size: 0.8rem;
            font-weight: bold;
            line-height: 1.4;
            border-radius: 0.2rem;
            transition: opacity 0.3s ease;
        }

        #dis-table table td>span {
            font-size: 0.8em;
            font-weight: normal;
            display: block;
            width: 100%;
        }

        #dis-table .stage-earth {
            background-color: #FFA726;
        }

        #dis-table .stage-mercury {
            background-color: #9CCC65;
        }

        #dis-table .stage-venus {
            background-color: #FF8A65;
        }

        #dis-table .stage-mars {
            background-color: #B3E5FC;
        }

        #dis-table .stage-jupiter {
            background-color: #81D4FA;
        }

        #dis-table .stage-saturn {
            background-color: #26C6DA;
        } */



        .schedule-warp {
            padding-right: 20px;
            padding-left: 20px;
            padding: 20px 30px;
            border: solid 1px #ddd;
            background-color: #f5f5f5;
            -webkit-transition: all 0.7s cubic-bezier(0.11, 0.6, 0.24, 0.89);
            transition: all 0.7s cubic-bezier(0.11, 0.6, 0.24, 0.89);
        }

        .schedule {
            background-color: #fff;
        }

        .schedule-warp:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, .07);
            border: solid 1px rgba(8, 106, 216, .97);
        }

        .schedule {
            padding: 100px 0px;
            background-color: #ecedf0;
            font-family: 'Roboto', sans-serif !important;
        }

        .schedule-tag {
            color: #fff;
            background-color: #086AD8;
            padding: 3px 8px;
            margin-right: 15px;
            width: 90px;
            font-family: 'Roboto', sans-serif !important;
            text-align: center;
        }

        .schedule-header span {
            display: inline-block;
            margin-right: 25px;
        }

        .schedule-header {
            margin-bottom: 80px;
        }

        .schedule-card {
            position: relative;
            margin-bottom: 0.7em;
        }

        .schedule-card:hover .insidebox {
            transform: scale(1.033);
            /* box-shadow: 0 5px 18px rgba(0, 0, 0, 0.1); */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            cursor: pointer;
        }

        .schedule-card:hover:after {
            background: #086AD8;
            width: 25px;
        }

        .schedule-card:after {
            height: 2px;
            width: 22px;
            background: #ddd;
            content: '';
            position: absolute;
            top: 50%;
            left: -22px;
            transition: all 0.3s ease-in;
        }

        .insidebox {
            box-shadow: 0 0px 5px rgba(0, 0, 0, .07);
            background: #ffffff;
            width: 100%;
            height: auto;
            display: flex;
            display: -moz-flex;
            display: -ms-flex;
            display: -webkit-flex;
            display: -o-flex;
            -webkit-align-items: center;
            align-items: center;
            padding: 10px 20px;
            color: #086AD8;
            transition: all 0.2s ease-in;
            /*    justify-content: center;*/
        }

        .day-one {
            margin-bottom: 50px;
            font-weight: bold;
            font-size: 20px;
            color: #086AD8;
        }

        /*Style for workshop page starts here */
        .w-h1 {
            font-size: 46px;
            font-weight: bold;
            color: #0a58ca
        }

        .w-h4 {
            font-size: 20px;
            font-weight: bold;
            margin-top: 30px;
        }

        .w-h3 {
            font-size: 24px;
            font-weight: 600;
            color: #0a58ca;
            padding: 10px;
            margin: 0px auto;
        }

        .w-h6 {
            font-size: 18px;
            font-weight: bold;
            color: #575757;
        }

        .workshop-icon i {
            color: #fff !important;
            background: #086AD8 !important;
            height: 60px;
            width: 60px;
            border-radius: 50px;
            text-align: center;
            display: inline-block;
            font-size: 24px;
            line-height: 60px;
            position: absolute;
            left: 39%;
            top: -15%;
        }



        .workshop-icon i:hover {
            cursor: pointer;
            border: 1px solid #086AD8;
            color: #086AD8 !important;
            background: #fff !important;
        }

        .br-2 {
            border-radius: 2.3rem !important;
        }

        @media only screen and (min-width: 320px) and (max-width: 992px) {
            .w-h1 {
                font-size: 24px;
                font-weight: bold;
                color: #0a58ca
            }

            .w-h4 {
                font-size: 16px;
                font-weight: bold;
                margin-top: 10px;
            }

            .w-h3 {
                font-size: 18px;
                font-weight: 600;
                color: #0a58ca;
                padding: 10px;
                margin: 0px auto;
            }

            .w-h6 {
                font-size: 12px;
                font-weight: bold;
                color: #575757;
            }
        }

        /*Style for workshop page starts here */


        /*timeline css*/

        .timeline_area {
            position: relative;
            z-index: 1;
        }

        .single-timeline-area {
            position: relative;
            z-index: 1;
            padding-left: 180px;
        }

        @media only screen and (max-width: 575px) {
            .single-timeline-area {
                padding-left: 100px;
            }
        }

        .single-timeline-area .timeline-date {
            position: absolute;
            width: 180px;
            height: 100%;
            top: 0;
            left: 0;
            z-index: 1;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -ms-grid-row-align: center;
            align-items: center;
            -webkit-box-pack: end;
            -ms-flex-pack: end;
            justify-content: flex-end;
            padding-right: 60px;
        }

        @media only screen and (max-width: 575px) {
            .single-timeline-area .timeline-date {
                width: 100px;
            }
        }

        .single-timeline-area .timeline-date::after {
            position: absolute;
            width: 3px;
            height: 100%;
            content: "";
            background-color: #ebebeb;
            top: 0;
            right: 30px;
            z-index: 1;
        }

        .single-timeline-area .timeline-date::before {
            position: absolute;
            width: 11px;
            height: 11px;
            border-radius: 50%;
            background-color: #ffb013;
            content: "";
            top: 50%;
            right: 26px;
            z-index: 5;
            margin-top: -5.5px;
        }

        .single-timeline-area .timeline-date p {
            margin-bottom: 0;
            color: #086AD8;
            font-size: 13px;
            text-transform: uppercase;
            font-weight: 500;
        }

        .single-timeline-area .single-timeline-content {
            position: relative;
            z-index: 1;
            padding: 30px 30px 25px;
            border-radius: 6px;
            margin-bottom: 15px;
            margin-top: 15px;
            -webkit-box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            box-shadow: 0 0.25rem 1rem 0 rgba(47, 91, 234, 0.125);
            border: 1px solid #ebebeb;
        }

        @media only screen and (max-width: 575px) {
            .single-timeline-area .single-timeline-content {
                padding: 20px;
            }

        }


        .single-timeline-area .single-timeline-content .timeline-icon {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
            width: 30px;
            height: 30px;
            background-color: #ffb013;
            -webkit-box-flex: 0;
            -ms-flex: 0 0 30px;
            flex: 0 0 30px;
            text-align: center;
            max-width: 30px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .single-timeline-area .single-timeline-content .timeline-icon i {
            color: #ffffff;
            line-height: 30px;
        }

        .single-timeline-area .single-timeline-content .timeline-text h6 {
            -webkit-transition-duration: 500ms;
            transition-duration: 500ms;
        }

        .single-timeline-area .single-timeline-content .timeline-text p {
            font-size: 13px;
            margin-bottom: 0;
        }

        .single-timeline-area .single-timeline-content:hover .timeline-icon,
        .single-timeline-area .single-timeline-content:focus .timeline-icon {
            background-color: #086AD8;
        }

        .single-timeline-area .single-timeline-content:hover .timeline-text h6,
        .single-timeline-area .single-timeline-content:focus .timeline-text h6 {
            color: #086AD8;
        }

        /*timeline css*/



        /*timeline new css*/




        /*timeline new css*/
    </style>
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-861967074"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-861967074');
    </script>
    <!-- Google Tag Manager -->

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start':

                    new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],

                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =

                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);

        })(window, document, 'script', 'dataLayer', 'GTM-KHTR7Z8');
    </script>

    <!-- End Google Tag Manager -->

</head>

<body>
    <?php require_once('header.php'); ?>
    <main>
        <div class="hero-arera course-item-height">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-course-1-text">
                            <h2>Upcoming Events</h2>
                        </div>
                        <div class="course-title-breadcrumb">
                            <nav>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                    <li class="breadcrumb-item"><span>Events</span></li>
                                    <li class="breadcrumb-item"><span>Designer's Career</span></li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="features-area fix pb-70">
            <div class="academic-courses-area p-relative pt-60 pb-120">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center mb-30 ">
                                <p class="w-h1">Career in Designing Industry</p>
                                <p class="date w-h4">26th February 2023, Sunday at 9:30am</p>
                                <!-- <div style="font-size:28px; font-weight:600;color:#fff;background-color:#575757; padding:10px; margin:0px auto;width:70%;border-radius:10px;">Speaker, Udayalingam , Founder and Designer <span style="font-size:18px; font-weight:bold;">, Buff Creative College</span></div> -->
                                <div class="w-h3">Speaker &amp; Host:- Mr. Udayalingam <br>
                                    <span class="w-h6">Founder , Mentor, Designer Buff Creative College</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-xl-12">
                            <p class="text-center"> <img src="assets/img/careerguide.jpg" width="100%"></img> </p>
                            <!-- <iframe width="1120" height="630" src="https://www.youtube.com/embed/lgX6kXf4O00" title="Designer's Career" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> -->
                        </div>
                        <div class="col-sm-12 col-md-12 col-xl-12 mt-100 mb-30">
                            <div id="eventtime" class="text-center date"> </div>
                            <div class="col-sm-12 col-md-12 col-xl-12 d-flex justify-content-center mt-30"><a class="edo-course-sec-btn text-center" href="https://www.instamojo.com/@buffcreativecollege/lf193a8be74dc4f4cad0c87c42706dcf6/">Register Now</a></div>
                        </div>
                    </div>

                    <div class="row" style="position:relative;">
                        <div class="col-sm-12 col-md-12 col-xl-12 mt-100 mb-30">
                            <h5 class="card-title text-dark text-center">Discussion on</h5>
                            <h1 class="card-title text-primary text-center mb-30">Designer's Career</h1>
                        </div>

                        <div class="col-sm-12 col-xs-12  col-md-6 col-xl-3 mt-80">
                            <div class="card p-2 br-2 workshop-icon">
                                <i class="fal fa-laptop-code"></i>
                                <div class="card-header text-center">
                                    <h4 class="pt-20">Professional Skills</h4>
                                </div>
                                <div class="card-body text-center">
                                    <p>Design principle, Creativity, Ability to follow branding guidelines, Typography skills , Font selection</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 col-xs-12  col-md-6 col-xl-3 mt-80">
                            <div class="card p-2 br-2 workshop-icon">
                                <i class="fad fa-industry"></i>
                                <div class="card-header text-center">
                                    <h4 class="pt-20">Industry Overview</h4>
                                </div>
                                <div class="card-body text-center">
                                    <p>The graphic design industry includes many activities, including corporate identity/branding, advertising, print production, and web design.etc...</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12  col-md-6 col-xl-3 mt-80">
                            <div class="card p-2 br-2 workshop-icon">
                                <i class="fad fa-drafting-compass"></i>
                                <div class="card-header text-center">
                                    <h4 class="pt-20">How to get a design Job</h4>
                                </div>
                                <div class="card-body text-center">
                                    <p>Smarten up your portfolio , Harness your creativity
                                        Do your interview preparation etc</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-xs-12  col-md-6 col-xl-3 mt-80">
                            <div class="card p-2 br-2 workshop-icon">
                                <i class="fad fa-swatchbook"></i>
                                <div class="card-header text-center">
                                    <h4 class="pt-20">Freelance Design Project</h4>
                                </div>
                                <div class="card-body text-center">
                                    <p>There are 7 ways to find freelance design work Create social profiles on design websites ,
                                        Freelance job marketplaces etc...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <section class="timeline_area section_padding_130">
                    <div class="container mt-100">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-8 col-lg-6">
                                <!-- Section Heading-->
                                <div class="section_heading text-center">
                                    <h6 class="text-primary w-h3">Schedule</h6>
                                    <h3 class="date">26th February 2023</h3>
                                    <div class="line"></div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <!-- Timeline Area-->
                                <div class="apland-timeline-area">
                                    <!-- Single Timeline Content-->
                                    <div class="single-timeline-area">
                                        <div class="timeline-date wow fadeInLeft" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInLeft;">
                                            <p class="d-none d-xl-block">Programme</p>
                                        </div>
                                        <div class="row">
                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                    <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                                    <div class="timeline-text">
                                                        <h6 class="date">9:30 AM to 11:00 AM</h6>
                                                        <p>Session Starts</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                    <div class="timeline-icon"><i class="fa fa-coffee" aria-hidden="true"></i></div>
                                                    <div class="timeline-text">
                                                        <h6 class="date">11:00 AM to 11:30 AM</h6>
                                                        <p>Break</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                    <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                                    <div class="timeline-text">
                                                        <h6 class="date">11:30 AM to 12:30 PM</h6>
                                                        <p>Discussion On</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-3 col-xl-3">
                                                <div class="single-timeline-content d-flex wow fadeInLeft" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInLeft;">
                                                    <div class="timeline-icon"><i class="fa fa-address-card" aria-hidden="true"></i></div>
                                                    <div class="timeline-text">
                                                        <h6 class="date">12:30 PM to 01:30 PM</h6>
                                                        <p>Q & A</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>



    </main>

    <script>
        // Set the date we're counting down to
        var countDownDate = new Date("Feb 26, 2023 09:00:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("eventtime").innerHTML = "<div class='container '><div class='row d-flex justify-content-center'><div class='col-3 d-flex justify-content-center'><div class='d-flex flex-column bd-highlight mb-3'><div class='p-2 bd-highlight f-date'>" + days + "</div><div class='p-2 bd-highlight'>Days</div> </div></div> " + "<div class='col-3 d-flex justify-content-center b-left'><div class='d-flex flex-column bd-highlight mb-3'><div class='p-2 bd-highlight f-date'>" + hours + "</div><div class='p-2 bd-highlight'>Hours</div></div></div> " + "<div class='col-3 d-flex justify-content-center b-left'><div class='d-flex flex-column bd-highlight mb-3'><div class='p-2 bd-highlight f-date'>" + minutes + "</div><div class='p-2 bd-highlight'>Minutes</div></div></div> " + "<div class='col-3 d-flex justify-content-center b-left'><div class='d-flex flex-column bd-highlight mb-3'><div class='p-2 bd-highlight f-date'>" + seconds + "</div><div class='p-2 bd-highlight'>Seconds</div></div></div>"

            // Output the result in an element with id="demo"
            document.getElementById("eventtime2").innerHTML = "<div class='container '><div class='row d-flex justify-content-center'><div class='col-3 d-flex justify-content-center'><div class='d-flex flex-column bd-highlight mb-3'><div class='p-2 bd-highlight f-date'>" + days + "</div><div class='p-2 bd-highlight'>Days</div> </div></div> " + "<div class='col-3 d-flex justify-content-center b-left'><div class='d-flex flex-column bd-highlight mb-3'><div class='p-2 bd-highlight f-date'>" + hours + "</div><div class='p-2 bd-highlight'>Hours</div></div></div> " + "<div class='col-3 d-flex justify-content-center b-left'><div class='d-flex flex-column bd-highlight mb-3'><div class='p-2 bd-highlight f-date'>" + minutes + "</div><div class='p-2 bd-highlight'>Minutes</div></div></div> " + "<div class='col-3 d-flex justify-content-center b-left'><div class='d-flex flex-column bd-highlight mb-3'><div class='p-2 bd-highlight f-date'>" + seconds + "</div><div class='p-2 bd-highlight'>Seconds</div></div></div>"


            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("demo").innerHTML = "EXPIRED";
            }
        }, 1000);






        // Globals
        var prefixes = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        var $container = $('.container');
        var $timeline = $('.timeline');
        var $timelineItem = $('.timeline-item');
        var $timelineContent = $('.timeline-content');
        var $dropDown = $('.dropdown');
        var $hasHovered = true;
        var hideOnExit = false;

        // mouseenter event handler
        $timelineItem.on('mouseenter', function(e) {

            var isSelected = $(this).hasClass('selected');

            if (isSelected === false) {

                var leftPos = $(this).position().left,
                    left = leftPos - 88,
                    $that = $(this);

                $timelineItem.removeClass('selected');
                $(this).addClass('selected');

                if ($hasHovered === false) {
                    // Show Bounce

                    // Set Flag
                    $hasHovered = true;

                    // Show DD Bounce
                    showBounce(left);

                    // Show DD content Bounce
                    showContentBounce($that);

                } else {
                    // Follow

                    // Change pos of DD to follow
                    dropDownFollow(left);

                    // Hide previous dd content
                    $timelineContent.removeClass('animated fadeIn bounceIn');

                    // Show hovered dd content
                    $that.find($timelineContent).addClass('animated fadeIn');
                }
            }

        });

        // mouseleave event handler
        $timeline.on('mouseleave', function(e) {

            if (hideOnExit) {

                //   Set Flag
                $hasHovered = false;

                // Hide DD
                hideDropDown();

                // Hide DD content
                $timelineContent.removeClass('animated fadeIn');

            }

        });

        // Animation end event listener
        $dropDown.on(prefixes, function(e) {

            if (e.originalEvent.animationName === 'fadeOut') {
                $dropDown.removeAttr('style');
            }

        });

        /**
         * Private functions that do showing/hiding/animating
         */
        function showContentBounce(that) {
            $hasBounced = true;
            that.find('.timeline-content').addClass('animated bounceIn');
        }

        function showBounce(pos) {
            $dropDown.css('left', pos + 'px').removeClass('fadeOut').addClass('animated bounceIn');
        }

        function dropDownFollow(pos) {
            $dropDown.css('left', pos + 'px');
        }

        function hideDropDown() {
            $timelineItem.removeClass('selected');
            $dropDown.removeClass('bounceIn').addClass('fadeOut');
        }
    </script>




    <?php require_once('footer.php'); ?>
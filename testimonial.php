<!doctype html>

<html class="no-js" lang="en">



<head>

    <meta charset="utf-8">

    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Testimonials | Buff Creative College</title>

    <meta name="title" content="Contact Us - Buff Creative College for Enquiries">

    <meta name="description" content="Looking to connect with Buff Creative College? Reach out to us through our contact page and let's start a conversation.">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="icon" href="https://www.buffinstituteofdesign.com/wp-content/uploads/2020/06/fav-icon-150x150.jpg" sizes="32x32" />

    <link rel="icon" href="https://www.buffinstituteofdesign.com/wp-content/uploads/2020/06/fav-icon-300x300.jpg" sizes="192x192" />

    <link rel="apple-touch-icon" href="https://www.buffinstituteofdesign.com/wp-content/uploads/2020/06/fav-icon-300x300.jpg" />

    <meta name="msapplication-TileImage" content="https://www.buffinstituteofdesign.com/wp-content/uploads/2020/06/fav-icon-300x300.jpg" /> -->

    <link rel="icon" href="assets/img/favicon.svg" sizes="32x32" />

    <link rel="stylesheet" href="assets/css/preloader.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/meanmenu.css?ver=1.2">







    <link rel="stylesheet" href="assets/css/nice-select.css?ver=1.2">
    <link rel="stylesheet" href="assets/css/default.css?ver=1.2">

    <link rel="stylesheet" href="assets/css/style.css?ver=1.2">


    <!-- Google Tag Manager -->

    <?php include('googletag.php') ?>

    <!-- End Google Tag Manager -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-861967074"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'AW-861967074');
    </script>
</head>



<body>



    <?php require_once('header.php'); ?>





    <main>
        <div class="mt-20">

            <script src="https://static.elfsight.com/platform/platform.js" async></script>
            <div class="elfsight-app-12ecea2d-ebbc-4ecc-a481-0a62f94bdb59" data-elfsight-app-lazy></div>
        </div>

        <div class="mt-20">
            <!-- Elfsight Google Reviews | Untitled Google Reviews -->
            <script src="https://static.elfsight.com/platform/platform.js" async></script>
            <div class="elfsight-app-4ef591cd-a6ea-4586-8f03-e018184d32be" data-elfsight-app-lazy></div>
        </div>
        <!-- testimonial-area-end -->
    </main>
    <script>
        // Function to shuffle the order of elements inside the testimonialRow
        function shuffleColumns() {
            var testimonialRow = document.getElementById("testimonialRow");
            for (var i = testimonialRow.children.length; i >= 0; i--) {
                testimonialRow.appendChild(testimonialRow.children[Math.random() * i | 0]);
            }
        }

        // Call the shuffleColumns function on page load
        window.addEventListener("load", shuffleColumns);

        var testimonialRow = document.getElementById("testimonialRow");
    </script>

    <?php require_once('footer.php'); ?>
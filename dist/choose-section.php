<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>O2 - Choose Section</title>
</head>
<body>
<div class="page-wrapper">
    <?php include_once('includes/menu.php'); ?>
    <?php  include_once('includes/forms/callback_form.php'); ?> 
    <div class="slideable-page-content">
    <?php include_once('includes/header.php'); ?>
        <section class="stub">
            <div class="page-hero">
                <div class="wrapper page-hero__wrapper">
                    <div class="page-hero_nav ">
                        <h1 class="page-hero__heading">
                            Обрати будинок
                        </h1>
                        <div class="page-hero__nav-links">
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="/">Головна</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_active" href="#">Обрати будинок<span class="btn_arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="full-plan">
            <svg version="1.1" class="full-plan__image" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                 viewBox="0 0 5329 2984" style="enable-background:new 0 0 5329 2984;" xml:space="preserve">
               <!--  <style type="text/css">
                    .st0{fill:#568752;stroke:#568752;stroke-miterlimit:10;}
                </style> -->
                <image style="overflow:visible;" width="5329" height="3000" xlink:href="img/choose-section/full-plan.jpg" >
                </image>
                <a href="#" class="full-plan__link">
                    <path class="full-plan__path" d="M4034.96,1798.85C4428,1474.82,4428,1474.82,4428,1474.82l75.01,42l90.66,27.85l5.33,260l-361.33,406.67
                    L4081,2114l-1-43l-45.04-24V1798.85z"/>
                </a>
                <!-- <path class="full-plan__link" d="M4807,1781"/> -->
            </svg>
        </section>


        <? include_once('includes/footer.php'); ?>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/common.min.js"></script>
<script src="js/choose-section.min.js"></script>
</body>
</html>
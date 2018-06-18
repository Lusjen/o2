<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>O2 - Choose Apartment</title>
</head>
<body>
<div class="page-wrapper">
    <?php include_once('includes/menu.php'); ?>
    <?php  include_once('includes/forms/callback_form.php'); ?> 
    <div class="slideable-page-content">
    <?php include_once('includes/header.php'); ?>
        <section class="camera-head">
            <div class="page-hero">
                <div class="wrapper page-hero__wrapper">
                    <div class="page-hero_nav">
                        <h1 class="page-hero__heading">
                            Веб камера
                        </h1>
                        <div class="page-hero__nav-links">
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="/">Головна</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_active" href="#">Веб камера<span class="btn_arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <img src="img/camera/camera-icon.png" alt="camera-image" class="camera__image">
        </section>
        
        <div class="wrapper">
            <section class="camera-content">
                <h1 class="camera-content__heading">
                    Запланований термін завершення будівництва <span class="camera-content__heading_black">II квартал 2019 року</span>
                </h1>
                <iframe class="camera-content__video" src="https://www.youtube.com/embed/UrJTZZibdHk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </section>
        </div>

    </div>



        <? include_once('includes/footer.php'); ?>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/common.min.js"></script>
<script src="js/choose-apartment.min.js"></script>
</body>
</html>
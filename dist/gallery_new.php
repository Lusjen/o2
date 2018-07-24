<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>O2 - Documents</title>
</head>
<body>
<div class="page-wrapper">
    <?php include_once('includes/menu.php'); ?>
    <?php  include_once('includes/forms/callback_form.php'); ?> 
    <div class="slideable-page-content">
    <?php include_once('includes/header.php'); ?>
        <section class="gallery-page">
            <div class="page-hero">
                <div class="wrapper page-hero__wrapper">
                    <div class="page-hero_nav">
                        <h1 class="page-hero__heading">
                            Галерея
                        </h1>
                        <div class="page-hero__nav-links">
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="/">Головна</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_active" href="#">Галерея<span class="btn_arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="gallery-slider-wrap">
            <ul class="gallery-slider">
                <li class="gallery-slider__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="img/gallery/2.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="img/gallery/3.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="img/gallery/4.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="img/gallery/5.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="img/gallery/6.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="img/gallery/7.jpg" alt="image" class="gallery-slider__image">
                </li>
                <li class="gallery-slider__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider__image">
                </li>
            </ul>
            <button class="gallery-slider__button gallery-slider__button_prev">
                <svg version="1.1" class="gallery-slider__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 599.4 582" style="enable-background:new 0 0 599.4 582;" xml:space="preserve">
                <path d="M24.2,306c0-11,0-22,0-33c0.3-1.5,0.7-2.9,0.8-4.4c3-41,14.3-79.6,35.1-115C104,78.9,168.7,33.5,254.1,18
                    c9.6-1.7,19.4-2.6,29.1-3.9c11,0,22,0,33,0c1.3,0.3,2.6,0.7,3.9,0.8c43.4,3.1,84.1,15.6,121.1,38.4
                    C512.7,97.4,556.3,161,571.3,243.9c1.7,9.6,2.6,19.4,3.9,29.1c0,11,0,22,0,33c-0.3,1.5-0.7,2.9-0.8,4.4
                    c-3.2,43.3-15.6,83.8-38.4,120.6c-44.1,71.5-107.7,115.1-190.6,130.1c-9.6,1.7-19.4,2.6-29.1,3.9c-11,0-22,0-33,0
                    c-1.3-0.3-2.6-0.7-3.9-0.8c-41.2-2.9-79.9-14.3-115.5-35.1C89.1,485.2,43.7,420.5,28.1,335.1C26.4,325.5,25.5,315.7,24.2,306z
                     M282.4,294.9c-1.6,1.7-2.8,3-4.1,4.3c-23.2,23.7-46.4,47.4-69.5,71.2c-11.3,11.6-11.2,26.1,0.1,37.7c8.8,9.1,17.6,18.2,26.5,27.2
                    c11.2,11.3,25.4,11.3,36.6-0.1c39.6-40.5,79.2-81,118.7-121.6c11.1-11.4,11.1-26.1,0-37.4c-39.5-40.6-79.1-81.1-118.7-121.6
                    c-11.3-11.5-25.5-11.4-36.9,0.2c-8.2,8.3-16.3,16.7-24.4,25c-13.8,14.1-13.9,27.3-0.2,41.3C234.4,245.7,258.2,270.1,282.4,294.9z"/>
                <path class="gallery-slider__icon-arrow" d="M282.4,294.9c-24.2-24.8-48.1-49.2-71.9-73.7c-13.6-14-13.6-27.2,0.2-41.3c8.2-8.3,16.2-16.7,24.4-25
                    c11.4-11.6,25.7-11.7,36.9-0.2c39.6,40.5,79.2,81,118.7,121.6c11,11.3,11,26,0,37.4c-39.5,40.6-79.1,81.1-118.7,121.6
                    c-11.1,11.4-25.4,11.4-36.6,0.1c-8.9-9-17.7-18.1-26.5-27.2c-11.2-11.6-11.4-26.1-0.1-37.7c23.1-23.8,46.3-47.5,69.5-71.2
                    C279.6,297.9,280.8,296.6,282.4,294.9z"/>
                </svg>
            </button>
            <button class="gallery-slider__button gallery-slider__button_next">
                <svg version="1.1" class="gallery-slider__icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 599.4 582" style="enable-background:new 0 0 599.4 582;" xml:space="preserve">
                <path d="M24.2,306c0-11,0-22,0-33c0.3-1.5,0.7-2.9,0.8-4.4c3-41,14.3-79.6,35.1-115C104,78.9,168.7,33.5,254.1,18
                    c9.6-1.7,19.4-2.6,29.1-3.9c11,0,22,0,33,0c1.3,0.3,2.6,0.7,3.9,0.8c43.4,3.1,84.1,15.6,121.1,38.4
                    C512.7,97.4,556.3,161,571.3,243.9c1.7,9.6,2.6,19.4,3.9,29.1c0,11,0,22,0,33c-0.3,1.5-0.7,2.9-0.8,4.4
                    c-3.2,43.3-15.6,83.8-38.4,120.6c-44.1,71.5-107.7,115.1-190.6,130.1c-9.6,1.7-19.4,2.6-29.1,3.9c-11,0-22,0-33,0
                    c-1.3-0.3-2.6-0.7-3.9-0.8c-41.2-2.9-79.9-14.3-115.5-35.1C89.1,485.2,43.7,420.5,28.1,335.1C26.4,325.5,25.5,315.7,24.2,306z
                     M282.4,294.9c-1.6,1.7-2.8,3-4.1,4.3c-23.2,23.7-46.4,47.4-69.5,71.2c-11.3,11.6-11.2,26.1,0.1,37.7c8.8,9.1,17.6,18.2,26.5,27.2
                    c11.2,11.3,25.4,11.3,36.6-0.1c39.6-40.5,79.2-81,118.7-121.6c11.1-11.4,11.1-26.1,0-37.4c-39.5-40.6-79.1-81.1-118.7-121.6
                    c-11.3-11.5-25.5-11.4-36.9,0.2c-8.2,8.3-16.3,16.7-24.4,25c-13.8,14.1-13.9,27.3-0.2,41.3C234.4,245.7,258.2,270.1,282.4,294.9z"/>
                <path class="gallery-slider__icon-arrow" d="M282.4,294.9c-24.2-24.8-48.1-49.2-71.9-73.7c-13.6-14-13.6-27.2,0.2-41.3c8.2-8.3,16.2-16.7,24.4-25
                    c11.4-11.6,25.7-11.7,36.9-0.2c39.6,40.5,79.2,81,118.7,121.6c11,11.3,11,26,0,37.4c-39.5,40.6-79.1,81.1-118.7,121.6
                    c-11.1,11.4-25.4,11.4-36.6,0.1c-8.9-9-17.7-18.1-26.5-27.2c-11.2-11.6-11.4-26.1-0.1-37.7c23.1-23.8,46.3-47.5,69.5-71.2
                    C279.6,297.9,280.8,296.6,282.4,294.9z"/>
                </svg>
            </button>

            <div class="gallery-slider-nav-wrap">
                <ul class="gallery-slider-nav">
                    <li class="gallery-slider-nav__item">
                        <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="img/gallery/2.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="img/gallery/3.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="img/gallery/4.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="img/gallery/5.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="img/gallery/6.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="img/gallery/7.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                    <li class="gallery-slider-nav__item">
                        <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                    </li>
                </ul>
                <button class="gallery-slider-nav__button gallery-slider-nav__button_prev">
                    <svg version="1.1" class="gallery-slider-nav__icon" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 599.4 582" style="enable-background:new 0 0 599.4 582;" xml:space="preserve">
                        <path  d="M282.4,294.9c-24.2-24.8-48.1-49.2-71.9-73.7c-13.6-14-13.6-27.2,0.2-41.3c8.2-8.3,16.2-16.7,24.4-25
                        c11.4-11.6,25.7-11.7,36.9-0.2c39.6,40.5,79.2,81,118.7,121.6c11,11.3,11,26,0,37.4c-39.5,40.6-79.1,81.1-118.7,121.6
                        c-11.1,11.4-25.4,11.4-36.6,0.1c-8.9-9-17.7-18.1-26.5-27.2c-11.2-11.6-11.4-26.1-0.1-37.7c23.1-23.8,46.3-47.5,69.5-71.2
                    C279.6,297.9,280.8,296.6,282.4,294.9z"/>
                    </svg>
                </button>
                <button class="gallery-slider-nav__button gallery-slider-nav__button_next">
                    <svg version="1.1" class="gallery-slider-nav__icon" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 599.4 582" style="enable-background:new 0 0 599.4 582;" xml:space="preserve">
                        <path  d="M282.4,294.9c-24.2-24.8-48.1-49.2-71.9-73.7c-13.6-14-13.6-27.2,0.2-41.3c8.2-8.3,16.2-16.7,24.4-25
                        c11.4-11.6,25.7-11.7,36.9-0.2c39.6,40.5,79.2,81,118.7,121.6c11,11.3,11,26,0,37.4c-39.5,40.6-79.1,81.1-118.7,121.6
                        c-11.1,11.4-25.4,11.4-36.6,0.1c-8.9-9-17.7-18.1-26.5-27.2c-11.2-11.6-11.4-26.1-0.1-37.7c23.1-23.8,46.3-47.5,69.5-71.2
                    C279.6,297.9,280.8,296.6,282.4,294.9z"/>
                    </svg>
                </button>
            </div>

            <!-- <ul class="gallery-slider-nav">
                <li class="gallery-slider-nav__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                </li>
                <li class="gallery-slider-nav__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                </li>
                <li class="gallery-slider-nav__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                </li>
                <li class="gallery-slider-nav__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                </li>
                <li class="gallery-slider-nav__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                </li>
                <li class="gallery-slider-nav__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                </li>
                <li class="gallery-slider-nav__item">
                    <img src="img/gallery/1.jpg" alt="image" class="gallery-slider-nav__image">
                </li>
            </ul> -->
        </section>



        <? include_once('includes/footer.php'); ?>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/common.min.js"></script>
<script src="js/gallery.min.js"></script>
</body>
</html>
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
        <section class="documents-page">
            <div class="page-hero">
                <div class="wrapper page-hero__wrapper">
                    <div class="page-hero_nav">
                        <h1 class="page-hero__heading">
                            Документи
                        </h1>
                        <div class="page-hero__nav-links">
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="/">Головна</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_active" href="#">Документи<span class="btn_arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="documents-wrap">
            <div class="wrapper">
                <div class="documents">
                    <div class="document-slider-wrap">
                        <ul class="document-slider">
                            <li class="document-slider__item">
                                <a href="img/documents/doc-item.jpg" target="_blank" class="document-slider__link">
                                    <img src="img/documents/doc-item.jpg" alt="document" class="document-slider__image">
                                </a>
                            </li>
                            <li class="document-slider__item">
                                <a href="img/documents/doc-item.jpg" target="_blank" class="document-slider__link">
                                    <img src="img/documents/doc-item.jpg" alt="document" class="document-slider__image">
                                </a>
                            </li>
                            <li class="document-slider__item">
                                <a href="img/documents/doc-item.jpg" target="_blank" class="document-slider__link">
                                    <img src="img/documents/doc-item.jpg" alt="document" class="document-slider__image">
                                </a>
                            </li>
                            <li class="document-slider__item">
                                <a href="img/documents/doc-item.jpg" target="_blank" class="document-slider__link">
                                    <img src="img/documents/doc-item.jpg" alt="document" class="document-slider__image">
                                </a>
                            </li>
                            <li class="document-slider__item">
                                <a href="img/documents/doc-item.jpg" target="_blank" class="document-slider__link">
                                    <img src="img/documents/doc-item.jpg" alt="document" class="document-slider__image">
                                </a>
                            </li>
                        </ul>
                        <button class="document-slider__button document-slider__button_prev">
                            <img src="img/documents/documents-slider-arrow.png" alt="prev" class="document-slider__icon document-slider__icon_revers">
                        </button>
                        <button class="document-slider__button document-slider__button_next">
                            <img src="img/documents/documents-slider-arrow.png" alt="next" class="document-slider__icon">
                        </button>
                    </div>

                    <div class="document-about">
                        <p class="document-about__text">
                            У цьому розділі ми зібрали всю необхідну інформацію щодо будівництва житлового комплексу Washington. Тут ви можете ознайомитися з усіма дозвільними документами Washington. Якщо у вас залишилися питання, відділ продажу з радістю на них відповість.
                        </p>
                        <a href="#" class="document-about__button">
                            Перейти до вибору квартири
                        </a>
                    </div>
                </div>
            </div>
        </section>



        <? include_once('includes/footer.php'); ?>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/common.min.js"></script>
<script src="js/documents.min.js"></script>
</body>
</html>
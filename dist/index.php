<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>filter</title>
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
                    <div class="page-hero_nav">
                        <h1 class="page-hero__heading">
                            Обрати квартиру
                        </h1>
                        <div class="page-hero__nav-links">
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="/">Головна</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_main" href="#">Обрати будинок</a>
                            <span class="page-hero_vertical-line"></span>
                            <a class="page-hero__nav-link page-hero__nav-link_active" href="#">Обрати поверх<span class="btn_arrow"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="filter">
            <div class="wrapper">
                <div class="filter-content">
                    <h4 class="filter__heading">Фільтр</h4>
                    <div class="filter-right">
                        <div class="filter-parameters-wrap">
                            <ul class="filter-parameters-list">
                                <li class="filter-parameters-list__item">
                                    <p class="filter-parameters-list__text">Вартысть грн</p>
                                    <div class="filter-parameters-list__input-wrap">
                                        <input type="text" class="filter-parameters-list__input">
                                        <input type="text" class="filter-parameters-list__input">
                                    </div>
                                    <div class="range-slider"></div>
                                </li>
                                <li class="filter-parameters-list__item">
                                    <p class="filter-parameters-list__text">Загальна площа м<span class="exponent">2</span></p>
                                    <div class="filter-parameters-list__input-wrap">
                                        <input type="text" class="filter-parameters-list__input">
                                        <input type="text" class="filter-parameters-list__input">
                                        <div class="range-slider"></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="filter middle"></div>
                    <div class="filter-left"></div>
                </div>
            </div>
        </section>



        <? include_once('includes/footer.php'); ?>
    </div>
</div>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

<script src="js/common.min.js"></script>
<script src="js/apartment-select.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.min.css">
    <title>O2 - Page Not Found</title>
</head>
<body>
<div class="page-wrapper">
    <?php include_once('includes/menu.php'); ?>
    <?php  include_once('includes/forms/callback_form.php'); ?>
    <div class="slideable-page-content">
    <?php include_once('includes/header.php'); ?>
        <section class="not-found">
            <div class="page-hero">
                <div class="wrapper">
                    <div class="message-container">
                        <h1 class="message__heading">
                            Дякуємо за ваше звернення!
                        </h1>
                        <div class="message__text">
                            Менеджер житлового комплексу O2 Residence обов'язково зв'яжеться з вами найближчим часом.
                        </div>
                        <h2 class="message__subheading">
                            Дізнайтеся більше про проекти компанії SAGA Development
                        </h2>
                        <div class="not-found__btns">
                            <a class="not-found-btn not-found-btn__main" href="/">На головну</a>
                            <a class="not-found-btn not-found-btn__back" href="#">Повернутися на попередню сторінку</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <? include_once('includes/footer.php'); ?>
    </div>
</div>
<script src="js/common.min.js"></script>
</body>
</html>
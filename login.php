<?php

$title = 'Bet.io - Login';
$currentPage = '/login';
include('assets/template/header.php');

?>

<section class="login__container">
    <div class="login__column__first">
        <div class="login__title">
            <h3 class="login__title">Connecte toi en toute<br> sécurité sur <span class="text__pinkb">Bet.</span><span class="text__white">io</span></h3>
        </div>
        <div class="login__desc">
            Si tu n'as pas de compte, tu<br>
            peux <a href="/register" class="text__pink">t'inscrire ici !</a>
        </div>
        <img class="login__image__task" src="assets/img/loginimage.png" alt="Deux personnages, l'un sur une chaise l'autre debout en train d'observer ses notes">
    </div>
    <div class="login__column__second">
        <div class="login__form__container">
            <div class="login__input__box">
                <input required placeholder="Adresse e-mail" autofocus type="text" class="input"/>
                <i class="fa fa-user"></i>
            </div>
            <div class="login__input__box">
                <input required type="password" placeholder="Mot de passe" class="input" id="password__field" />
                <i class="fa fa-key"></i>
                <span toggle="#password__field" class="fa fa-fw fa-eye-slash field__icon toggle__password"></span>
                <a href="/password" class="login__text__ref">Mot de passe oublié</a>
            </div>
            <div class="login__button__box">
                <button type="button" class="login__button">Se&nbspconnecter</button>
            </div>
            <span class="login__text__ref" id="login__intersection">Ou continue avec</span>
            <div class="login__logo__container">
                <a href="#" class="login__svg__container">
                    <svg class="login__svg__logo" width="49" height="50" viewBox="0 0 49 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M48.5212 20.4495H24.9837V30.1238H38.43C37.8502 33.2508 36.0912 35.8958 33.4397 37.6678C31.1987 39.1661 28.3388 40.0521 24.9772 40.0521C18.4691 40.0521 12.9642 35.6547 10.9967 29.7459C10.5016 28.2476 10.215 26.645 10.215 24.9967C10.215 23.3485 10.5016 21.7459 10.9967 20.2476C12.9707 14.3453 18.4756 9.94788 24.9837 9.94788C28.6515 9.94788 31.9414 11.2117 34.5342 13.6873L41.7003 6.51466C37.3681 2.47557 31.7199 0 24.9837 0C15.2182 0 6.76873 5.60261 2.65798 13.772C0.96417 17.1466 0 20.9642 0 25.0033C0 29.0423 0.96417 32.8534 2.65798 36.228C6.76873 44.3974 15.2182 50 24.9837 50C31.7329 50 37.3876 47.759 41.5179 43.9414C46.241 39.5896 48.9707 33.1792 48.9707 25.5635C48.9707 23.7915 48.8143 22.0912 48.5212 20.4495Z" fill="white"/>
                    </svg>
                </a>
                <a href="#" class="login__svg__container" id="login__svg__mid">
                    <svg class="login__svg__logo" width="43" height="50" viewBox="0 0 43 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M35.1188 26.4233C35.0948 22.3249 36.9517 19.236 40.7015 16.9585C38.6043 13.9538 35.4313 12.3012 31.2488 11.9827C27.2886 11.6702 22.9558 14.2903 21.3694 14.2903C19.6927 14.2903 15.8588 12.0909 12.842 12.0909C6.61633 12.187 0 17.0546 0 26.9581C0 29.8847 0.534835 32.9074 1.6045 36.0202C3.03474 40.1186 8.19079 50.1603 13.5692 49.9981C16.3816 49.932 18.3707 48.0029 22.0304 48.0029C25.5819 48.0029 27.4208 49.9981 30.5577 49.9981C35.9842 49.9199 40.6475 40.7917 42.0056 36.6813C34.7282 33.2499 35.1188 26.6336 35.1188 26.4233ZM28.803 8.09464C31.8497 4.47699 31.5733 1.18385 31.4832 0C28.7909 0.156244 25.6781 1.83286 23.9053 3.89408C21.9523 6.10553 20.8045 8.8398 21.0509 11.9226C23.9594 12.145 26.6156 10.6486 28.803 8.09464Z" fill="white"/>
                    </svg>
                </a>
                <a href="#" class="login__svg__container">
                    <svg class="login__svg__logo" id="logo__facebook" width="26" height="50" viewBox="0 0 26 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7.6875 50H16.8438V27.1875H24.5L25.6563 18.3125H16.8438V12.625C16.8438 10.0625 17.5625 8.3125 21.25 8.3125H25.9688V0.34375C25.1563 0.25 22.375 0 19.125 0C12.3125 0 7.6875 4.15625 7.6875 11.75V18.3125H0V27.1875H7.6875V50Z" fill="white"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php require('assets/template/footer.php'); ?>
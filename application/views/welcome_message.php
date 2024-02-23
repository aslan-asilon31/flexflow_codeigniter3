<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="<?= base_url(''); ?>assets/frontend/img/favicon-purple.png" type="image/x-icon">

    <!--=============== REMIXICON ===============-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="<?= base_url(''); ?>assets/frontend/css/styles.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">

    <title>Aradan Fitness</title>
</head>

<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <img src="<?= base_url(''); ?>assets/frontend/img/logo-nav-purple.png" alt="logo"> FlexFlow
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="#home" class="nav__link active-link">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="#program" class="nav__link">Program</a>
                    </li>
                    <li class="nav__item">
                        <a href="#choose" class="nav__link">Choose Us</a>
                    </li>
                    <li class="nav__item">
                        <a href="#pricing" class="nav__link">Pricing</a>
                    </li>

                    <div class="nav__link">
                        <a href="#footer" class="button nav__button">
                            Register Now
                        </a>
                    </div>

                    <div class="nav__link">
                        <div class="d-flex align-items-center">
                            3 <span class="fas fa-shopping-cart"></span> 
                        </div>
                    </div>

                    <li class="nav__item">
                        <div class="profile">
                            <div class="user">
                                <h3>Aslan Asilon</h3>
                                <p style="font-weight:bold; color:white;">@aslan</p>
                            </div>
                            <div class="img-box">
                                <img src="<?= base_url(''); ?>assets/frontend/img/man4.png" alt="some user image">
                            </div>
                        </div>
                        <div class="menu">
                            <ul>
                                <li><a href="#"><i class="ph-bold ph-user"></i>&nbsp;Profile</a></li>
                                <li><a href="#"><i class="ph-bold ph-envelope-simple"></i>&nbsp;Inbox</a></li>
                                <li><a href="#"><i class="ph-bold ph-gear-six"></i>&nbsp;Settings</a></li>
                                <li><a href="#"><i class="ph-bold ph-question"></i>&nbsp;Help</a></li>
                                <li><a href="#"><i class="ph-bold ph-sign-out"></i>&nbsp;Sign Out</a></li>
                            </ul>
                        </div>
                    </li>
                </ul>

                <div class="nav__close" id="nav-close">
                    <i class="ri-close-line"></i>
                </div>
            </div>

            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line"></i>
            </div>
        </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home section" id="home">
            <div class="home__container container grid">
                <div class="home__data">
                    <h2 class="home__subtitle">Make Your</h2>
                    <h1 class="home__title">BODY SHAPE</h1>
                    <p class="home__description">
                        In here we will help you to shape and build your ideal
                        body and live your life to the fullest.
                    </p>
                    <a href="#" class="button button__flex " >
                        Get Started <i class="ri-arrow-right-line"></i>
                    </a>
                </div>

                <div class="home__images">
                    <img src="<?= base_url(''); ?>assets/frontend/img/home-img.png" alt="home image" class="home__img">

                    <div class="home__triangle home__triangle-3"></div>
                    <div class="home__triangle home__triangle-2"></div>
                    <div class="home__triangle home__triangle-1"></div>
                </div>
            </div>
        </section>

        <!--==================== LOGOS ====================-->
        <section class="logos section">
            <div class="logos__container container grid">
                <img src="<?= base_url(''); ?>assets/frontend/img/logo1.png" alt="logo image" class="logos__img">
                <img src="<?= base_url(''); ?>assets/frontend/img/logo2.png" alt="logo image" class="logos__img">
                <img src="<?= base_url(''); ?>assets/frontend/img/logo3.png" alt="logo image" class="logos__img">
                <img src="<?= base_url(''); ?>assets/frontend/img/logo4.png" alt="logo image" class="logos__img">
            </div>
        </section>

        <!--==================== PROGRAM ====================-->
        <section class="program section" id="program">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Our Program</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">BUILD YOUR</h1>
                        <h1 class="section__title">BEST BODY</h1>
                    </div>
                </div>

                <div class="program__container grid">
                    <article class="program__card">
                        <div class="program__shape">
                            <img src="<?= base_url(''); ?>assets/frontend/img/program1-purple.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Flex Muscle</h3>

                        <p class="program__description">
                            Creating tension that's temporarily making the muscle
                            fibers smaller or contracted.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="<?= base_url(''); ?>assets/frontend/img/program2-purple.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Cardio Exercise</h3>

                        <p class="program__description">
                            Exercise your heart rate up and keeps it
                            up for a prolonged period of time.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="<?= base_url(''); ?>assets/frontend/img/program3-purple.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Basic Yoga</h3>

                        <p class="program__description">
                            Diaphragmatic this is the most common breathing
                            technique you'll find in yoga.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="program__card">
                        <div class="program__shape">
                            <img src="<?= base_url(''); ?>assets/frontend/img/program4-purple.png" alt="program image" class="program__img">
                        </div>

                        <h3 class="program__title">Weight Lifting</h3>

                        <p class="program__description">
                            Attempts a maximum weight single lift of a
                            barbell loaded with weight plates.
                        </p>

                        <a href="#" class="program__button">
                            <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== CHOOSE US ====================-->
        <section class="choose section" id="choose">
            <div class="choose__overflow">
                <div class="choose__container container grid">
                    <div class="choose__content">
                        <div class="section__data">
                            <h2 class="section__subtitle">Best Reason</h2>
                            <div class="section__titles">
                                <h1 class="section__title-border">WHY</h1>
                                <h1 class="section__title">CHOOSE US ?</h1>
                            </div>
                        </div>

                        <p class="choose__description">
                            Choose your favorite class and start now. Remember the
                            only bad workout is the one you didn't do.
                        </p>

                        <div class="choose__data">
                            <div class="choose__group">
                                <h3 class="choose__number">200+</h3>
                                <p class="choose__subtitle">Total Members</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">50+</h3>
                                <p class="choose__subtitle">Best trainers</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">25+</h3>
                                <p class="choose__subtitle">Programs</p>
                            </div>
                            <div class="choose__group">
                                <h3 class="choose__number">100+</h3>
                                <p class="choose__subtitle">Awards</p>
                            </div>
                        </div>
                    </div>

                    <div class="choose__images">
                        <img src="<?= base_url(''); ?>assets/frontend/img/choose-img.png" alt="choose image" class="choose__img">

                        <div class="choose__triangle choose__triangle-1"></div>
                        <div class="choose__triangle choose__triangle-2"></div>
                        <div class="choose__triangle choose__triangle-3"></div>
                    </div>
                </div>
            </div>
        </section>

        <!--==================== PRICING ====================-->
        <section class="pricing section" id="pricing">
            <div class="container">
                <div class="section__data">
                    <h2 class="section__subtitle">Pricing</h2>
                    <div class="section__titles">
                        <h1 class="section__title-border">OUR</h1>
                        <h1 class="section__title">SPECIAL PLAN</h1>
                    </div>
                </div>

                <div class="pricing__container grid">
                    <article class="pricing__card">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="<?= base_url(''); ?>assets/frontend/img/pricing1-purple.png" alt="pricing image" class="pricing__img">
                            </div>

                            <h1 class="pricing__title">BASIC PACKAGE</h1>
                            <h2 class="pricing__number">Rp 120k</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Sweatshirt
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>

                        <a href="#" class="button button__flex pricing__button" style="background-color:hsl(290, 63%, 50%);color:white;">
                            Purchase Now <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="pricing__card pricing__card-active">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="<?= base_url(''); ?>assets/frontend/img/pricing2-purple.png" alt="pricing image" class="pricing__img">
                            </div>

                            <h1 class="pricing__title">PREMIUM PACKAGE</h1>
                            <h2 class="pricing__number">Rp 240k</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Sweatshirt
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item pricing__item-opacity">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>

                        <a href="#" class="button button__flex pricing__button" style="background-color:hsl(290, 63%, 50%);color:white;">
                            Purchase Now <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>

                    <article class="pricing__card">
                        <header class="pricing__header">
                            <div class="pricing__shape">
                                <img src="<?= base_url(''); ?>assets/frontend/img/pricing3-purple.png" alt="pricing image" class="pricing__img">
                            </div>

                            <h1 class="pricing__title">DIAMOND PACKAGE</h1>
                            <h2 class="pricing__number">Rp 420k</h2>
                        </header>

                        <ul class="pricing__list">
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 5 Days In A Week
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Sweatshirt
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> 01 Bottle of Protein
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Access to Videos
                            </li>
                            <li class="pricing__item">
                                <i class="ri-checkbox-circle-line"></i> Muscle Stretching
                            </li>
                        </ul>

                        <a href="#" class="button button__flex pricing__button" style="background-color:hsl(290, 63%, 50%);color:white;">
                            Purchase Now <i class="ri-arrow-right-line"></i>
                        </a>
                    </article>
                </div>
            </div>
        </section>

        <!--==================== CALCULATE ====================-->
        <section class="calculate section">
            <div class="calculate__container container grid">
                <div class="calculate__content">
                    <div class="section__titles">
                        <h1 class="section__title-border">CALCULATE</h1>
                        <h1 class="section__title">YOUR BMI</h1>
                    </div>

                    <p class="calculate__description">
                        The body mass index (BMI) calculator calculates
                        body mass index from your weight and height.
                    </p>

                    <form action="" class="calculate__form" id="calculate-form">
                        <div class="calculate__box">
                            <input type="number" placeholder="Height" class="calculate__input" id="calculate-cm">
                            <label for="" class="calculate__label">cm</label>
                        </div>
                        <div class="calculate__box">
                            <input type="number" placeholder="Weight" class="calculate__input" id="calculate-kg">
                            <label for="" class="calculate__label">kg</label>
                        </div>

                        <button type="submit" class="button button__flex">
                            Calculate Now <i class="ri-arrow-right-line"></i>
                        </button>
                    </form>

                    <p class="calculate__message" id="calculate-message"></p>
                </div>

                <img src="<?= base_url(''); ?>assets/frontend/img/calculate-img.png" alt="calculate image" class="calculate__img">
            </div>
        </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer section" id="footer">
        <div class="footer__container container grid">
            <div>
                <a href="#" class="footer__logo">
                    <img src="<?= base_url(''); ?>assets/frontend/img/logo-nav-purple.png" alt=""> FlexFlow
                </a>
                <p class="footer__description">
                    Subscribe for company <br> updates below.
                </p>

                <form action="" class="footer__form" id="contact-form">
                    <input type="email" name="user_email" placeholder="Your Email" class="footer__input"
                        id="contact-user">
                    <button type="submit" class="button" style="color:white;">
                        Subscribe
                    </button>
                </form>

                <p class="footer__message" id="contact-message"></p>
            </div>

            <div class="footer__content">
                <div>
                    <h3 class="footer__title">
                        SERVICES
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Flex Muscle</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Cardio Exercise</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Basic Yoga</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Weight Lifting</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        PRICING
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">Basic</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Premium</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Diamond</a>
                        </li>
                    </ul>
                </div>

                <div>
                    <h3 class="footer__title">
                        COMPANY
                    </h3>

                    <ul class="footer__links">
                        <li>
                            <a href="#" class="footer__link">About Us</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Careers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Customers</a>
                        </li>
                        <li>
                            <a href="#" class="footer__link">Partners</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="footer__group">
                <ul class="footer__social">
                    <a href="https://www.facebook.com/" target="_blank" class="footer__social-link">
                        <i class="ri-facebook-circle-fill"></i>
                    </a>
                    <a href="https://twitter.com/" target="_blank" class="footer__social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="footer__social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                </ul>

                <span class="footer__copy">
                    &#169; FlexFlow. All rights reserved
                </span>
            </div>
        </div>
    </footer>

    <!--========== SCROLL UP ==========-->
    <a href="#" class="scrollup" id="scroll-up">
        <i class="ri-arrow-up-line"></i>
    </a>

    <!--=============== SCROLLREVEAL ===============-->
    <script src="<?= base_url(''); ?>assets/frontend/js/scrollreveal.min.js"></script>

    <!--=============== EMAIL JS ===============-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>

    <!--=============== MAIN JS ===============-->
    <script src="<?= base_url(''); ?>assets/frontend/js/main.js"></script>

    <script>

    </script>
</body>

</html>
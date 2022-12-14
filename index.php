<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anonime</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/null.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <!-- <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div> -->
    <div class="wrapper">
        <?php require('parts/header.php') ?>


        <main class="page">
            <section class="page__main preview">
                <div class="preview__container">
                    <div class="preview__content">
                        <div class="preview__title title">Explore</div>
                        <div class="preview__subtitle">What are you gonna watch today ?</div>
                    </div>
                    <div class="preview__slider slider-preview swiper">
                        <!-- Additional required wrapper -->
                        <div class="slider-preview__wrapper swiper-wrapper">
                            <!-- Slides -->
                            <div class="slider-preview__slide swiper-slide">
                                <div class="swiper-slide__title">Spy X Family</div>
                                <div class="swiper-slide__text">Corrupt politicians, frenzied nationalists, and other
                                    warmongering forces constantly jeopardize the thin veneer of peace between
                                    neighboring countries Ostania and Westalis.</div>
                                <div class="gradient"></div>
                                <div class="swiper-slide__image gradient">
                                    <img src="img/preview/slide-1.jpg" alt="Slider Image">
                                </div>
                            </div>
                            <div class="slider-preview__slide swiper-slide">
                                <div class="swiper-slide__title">Genshin Impact</div>
                                <div class="swiper-slide__text">Corrupt politicians, frenzied nationalists, and other
                                    warmongering forces constantly jeopardize the thin veneer of peace between
                                    neighboring countries Ostania and Westalis.</div>
                                <div class="swiper-slide__image gradient">
                                    <img src="img/preview/slide-2.jpg" alt="Slider Image">
                                </div>
                            </div>
                            <div class="slider-preview__slide swiper-slide">
                                <div class="swiper-slide__title">Weather With You</div>
                                <div class="swiper-slide__text">Corrupt politicians, frenzied nationalists, and other
                                    warmongering forces constantly jeopardize the thin veneer of peace between
                                    neighboring countries Ostania and Westalis.</div>
                                <div class="swiper-slide__image gradient">
                                    <img src="img/preview/slide-3.jpg" alt="Slider Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="page__new new">

                <div class="new__container">
                    <div class="new__title title">New Realeases</div>
                    <div class="new__movies movies-new">
                        <div class="movies-new__items">
                            <?php 
                            $sql = "SELECT id, movie_episode, title, img_src FROM movie";
                            $result = mysqli_query($conn, $sql);
                            while($row = $result->fetch_assoc()):
                            ?>
                            <div class="movies-new__item item-new-movies">
                                <a href="anime_page.php?id=<?= $row['id'] ?>&title=<?= $row['title'] ?>" class="item-new-movies__image small-gradient">
                                    <img src="<?= $row['img_src'] ?>" alt="">
                                </a>
                                <div class="item-new-movies__episode">Episode <?= $row['movie_episode'] ?></div>
                                <a href="#" class="item-new-movies__title"><?= $row['title'] ?></a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/preloader.js"></script>
</body>

</html>
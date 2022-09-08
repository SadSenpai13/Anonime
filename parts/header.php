<nav class="burger__body">
    <ul class="burger__list">
        <li class="burger__item"><a href="/index.php" class="menu__link">Home</a></li>
        <li class="burger__item"><a href="#" class="menu__link">List anime</a></li>
    </ul>
</nav>
<header class="header">
<?php require('configs/connect.php') ?>

    <div class="header__container">
        <div class="header__menu menu">
            <div class="header__logo">
                <a href="/index.php">Anomime</a>
                <div class="burger"><span></span></div>
            </div>
            <nav class="menu__body">
                <ul class="menu__list">
                    <li class="menu__item"><a href="/index.php" class="menu__link">Home</a></li>
                    <li class="menu__item"><a href="anime_list.html" class="menu__link">List anime</a></li>
                </ul>
            </nav>
<<<<<<< HEAD

            <form class="header__form form-header">
                <input class="form-header__input" type="text" placeholder="Search">
                <a class="input-search-button" href="#"><img src="img/header/search.svg" alt="search button"></a>
=======
            <?php 
                
                // $title = 
                if(isset($_POST['search'])) {
                    $title = $_POST['search'];

                    $sql = "SELECT movie.id, movie.title 
                    FROM movie 
                    WHERE movie.title LIKE '%" . $title . "%'";
                    $result = mysqli_query($conn, $sql);
                    $row = $result->fetch_assoc();
                    header("Location: anime_page.php?id=" . $row['id'] . "");
                }
            ?>
            <form class="header__form form-header" method="POST" action="anime_page.php?id">
                <input name="search" class="form-header__input" type="text" placeholder="Search">
                <input name="search-btn" class="search-btn" type="submit" value="">
>>>>>>> bbdcb80aab6c81f1a394c0253f6cbc734ac0dbe6
            </form>
        </div>
    </div>
</header>
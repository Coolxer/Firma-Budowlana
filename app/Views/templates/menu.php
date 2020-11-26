<link rel="stylesheet" href="assets/css/templates/menu.css">

<nav class="navbar navbar-expand-lg">
    <i class="far fa-building brand-icon"></i>
    <a class=" navbar-brand" href="#">Firma Budowlana</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/home">Strona główna <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about">O firmie</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/howitworks">Jak to działa?</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/contact">Kontakt</a>
            </li>
        </ul>
    </div>
    <i class="fas fa-user"></i>
    <?php

    if (empty($_SESSION['email']) && empty($_SESSION['pesel'])) {
        echo '<li class=\"nav-item\"><a class=\"nav-link\" href=user/login>Zaloguj się</a> </li>';
    } else {
        echo '<li class=\"nav-item\">$_SESSION[\'email\']</li>';
    }

    ?>
</nav>
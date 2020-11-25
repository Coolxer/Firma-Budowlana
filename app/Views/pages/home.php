<link rel="stylesheet" href="assets/css/pages/home.css">

<?php if (empty($_SESSION['logged'])) : ?>

    <div class="row home-box">
        <div class="col-lg-8 col-md-9 col-sm-10 col-11">
            <div class="row home-content">
                <div class="col-xl-3 col-sm-11 icons">
                    <div class="row">
                        <i class="far fa-building col-xl-12 col-6 icon"></i>
                        <i class="fas fa-hammer fa-flip-horizontal col-xl-12 col-6 icon"></i>
                    </div>
                </div>
                <div class="jumbotron col-xl-9 col-sm-12">
                    <h1 class="display-4 jumb-header">Firma Budowlana</h1>
                    <hr class="my-4">
                    <p class="lead"><i class="fas fa-check"></i>Realizujemy usługi najwyższej jakości. Z nami zbudujesz swój dom i wyremontujesz swoje mieszkanie!</p>
                    <p class="lead"><i class="fas fa-check"></i>Zaprojektujemy twój wymarzony dom lub wykonamy gotowy projekt!</p>
                    <p class="lead"><i class="fas fa-check"></i>Zapewniamy materiały najwyższej jakości w konkurencyjnej cenie!</p>
                    <p class="lead"><i class="fas fa-check"></i>Nasi pracownicy są najlepsi w swoim fachu!</p>
                    <p class="lead"><i class="fas fa-check"></i>Nie znajdziesz lepszej ofery na rynku!</p>
                    <hr class="my-4">
                    <p class="lead dont-wait">Nie czekaj! Już teraz złóż zgłoszenie, a otrzymasz natychmiastową ofertę!</p>
                    <a class="btn btn-primary btn-lg btn-block" href="#" role="button">Złóż zgłoszenie</a>
                </div>
            </div>
        </div>
    </div>

<?php elseif ($_SESSION['role'] == 'klient') : ?>

<?php elseif ($_SESSION['role'] == 'kierownik') : ?>

    <!-- $_SESSION['role] == 'ksiegowy's
<?php else : ?> 

<?php endif; ?>
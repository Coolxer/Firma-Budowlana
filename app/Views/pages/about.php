<link rel="stylesheet" href="assets/css/pages/about.css">

<?php
$db = db_connect();
?>

<div class="row about-box">
    <div class="col about-content">
        <h1>O FIRMIE</h1>
        <hr class="my-4 about-line">
        <p>Firma Budowlana powstała w 2020 roku. Zapewniamy usługi wysokiej jakości. Mamy wyszkolonych pracowników i materiały najwyższej jakości.</p>
        <p>Nasi klienci bardzo chwalą sobie świadczone przez nas usługi i polecają nas znajomym!</p>

    </div>
    <div class="col-12">
        <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 about-stat">
                <i class="fas fa-users about-icon"></i>
                <span class="about-value"">
                    <?php
                    echo count($db->query('SELECT * FROM danepersonalne WHERE Rola="klient"')->getResult());
                    ?>
                </span>
                klientów
            </div>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 about-stat">
                    <i class="fas fa-home about-icon"></i>
                    <span class="about-value"">
                    <?php
                    echo count($db->query('SELECT * FROM zlecenia')->getResult());
                    ?>
                </span>
                zleceń
            </div>
                        <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 about-stat">
                        <i class="fas fa-cogs about-icon"></i>
                        <span class="about-value"">
                    <?php
                    echo count($db->query('SELECT * FROM maszyny')->getResult());
                    ?>
                </span>
                maszyn
            </div>
                                <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 about-stat">
                            <i class="fas fa-user-cog about-icon"></i>
                            <span class="about-value"">
                    <?php
                    echo count($db->query('SELECT * FROM danepersonalne WHERE Rola="pracownik"')->getResult());
                    ?>
                </span>
                pracowników
            </div>
        </div>
    </div>
</div>
<?php
require_once 'header.php';
require_once "dbkoneksi.php";
?>

<section id="hero" class="hero">
    <div class="container position-relative">
        <div class="row gy-5" data-aos="fade-in">
            <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center text-center text-lg-start">
                <h2>Belanja Berbagai Produk Secara Online</h2>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="index.php" class="btn-get-started">Lihat produk</a>
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox btn-watch-video d-flex align-items-center"></a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2">
                <img src="assets/img/hero-img.svg" class="img-fluid" alt="" data-aos="zoom-out" data-aos-delay="100">
            </div>
        </div>
    </div>

    <div class="icon-boxes position-relative">
        <div class="container position-relative">
            <div class="row gy-4 mt-5">


            </div>
        </div>
    </div>

    </div>
</section>

<main id="main">


    <!-- ======= Our Services Section ======= -->
    <section id="services" class="services sections-bg">
        <div class="container" data-aos="fade-up">

            <div class="section-header">
                <h2>Detail produk</h2>
            </div>
            <?php
            require_once "dbkoneksi.php";
            $sql = "SELECT produk.*, kategori_produk.nama AS kategori FROM produk
          INNER JOIN kategori_produk ON kategori_produk.id = produk.kategori_produk_id";
            $st = $dbh->query($sql);
            $st->execute();
            $row = $st->fetchAll();

            ?>
            <div class="col-lg-4 col-md-6">
                <?php foreach ($row as $prod) : ?>
                    <div class="service-item position-relative">
                        <div class="icon">
                            <i class="bi bi-calendar4-week"></i>
                        </div>
                        <h3><?= $prod['nama'];  ?></h3>
                        <p><?= $prod['kategori'];  ?></p>
                        <a href="detail_produk.php?id=<?= $prod['id'] ?>" class="readmore stretched-link"> <span>Read more</span> <i class="bi bi-arrow-right"></i></a>
                    </div>
                <?php endforeach; ?>
            </div><!-- End Service Item -->

        </div><!-- End Service Item -->
    </section><!-- End Our Services Section -->


</main><!-- End #main -->

<?php
require_once 'footer.php';
?>
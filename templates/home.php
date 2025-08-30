<?php $this->layout('layouts::layout', ['title' => 'Beranda']) ?>

<?php $this->start('main_content') ?>

<section id="hero" class="d-flex align-items-center text-center">
    <div class="container">
        <h1 class="display-4 fw-bold text-white">Solusi Digital untuk Masa Depan</h1>
        <p class="lead text-white-50">Mewujudkan ide Anda menjadi solusi digital yang inovatif dan terpercaya.</p>
    </div>
</section>

<div class="container my-5">

    <section id="layanan" class="py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Layanan Utama Kami</h2>
            <p class="text-muted">Kami menyediakan berbagai solusi teknologi untuk bisnis Anda.</p>
        </div>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="card service-card h-100 p-4 border-0 d-flex flex-column align-items-center">
                    <div class="icon-circle mb-3"><i class="fas fa-laptop-code fa-2x"></i></div>
                    <h5 class="card-title fw-bold">Pengembangan Website</h5>
                    <p class="card-text">Layanan pembuatan website profesional untuk profil perusahaan dan bisnis Anda.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card h-100 p-4 border-0 d-flex flex-column align-items-center">
                    <div class="icon-circle mb-3"><i class="fas fa-mobile-alt fa-2x"></i></div>
                    <h5 class="card-title fw-bold">Aplikasi Mobile</h5>
                    <p class="card-text">Mengembangkan aplikasi mobile modern untuk platform Android dan iOS.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card service-card h-100 p-4 border-0 d-flex flex-column align-items-center">
                    <div class="icon-circle mb-3"><i class="fas fa-palette fa-2x"></i></div>
                    <h5 class="card-title fw-bold">Desain UI/UX</h5>
                    <p class="card-text">Membuat desain antarmuka yang modern, menarik, dan mudah digunakan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portofolio" class="py-5">
        <div class="text-center mb-5">
            <h2 class="section-title">Portofolio Proyek</h2>
            <p class="text-muted">Beberapa proyek yang telah berhasil kami kerjakan.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card portfolio-card shadow-sm border-0">
                    <img src="images/portfolio/burgerworld.png" class="card-img-top" alt="Proyek 1">
                    <div class="card-body"><h5 class="card-title fw-bold">Website Burger World</h5><p class="card-text">Deskripsi singkat mengenai proyek dummy pertama.</p></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card portfolio-card shadow-sm border-0">
                    <img src="images/portfolio/valentine.png" class="card-img-top" alt="Proyek 2">
                    <div class="card-body"><h5 class="card-title fw-bold">Website Valentine</h5><p class="card-text">Deskripsi singkat mengenai proyek dummy kedua.</p></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card portfolio-card shadow-sm border-0">
                    <img src="images/portfolio/verimerch.png" class="card-img-top" alt="Proyek 3">
                    <div class="card-body"><h5 class="card-title fw-bold">Website verifikasi</h5><p class="card-text">Deskripsi singkat mengenai proyek dummy ketiga.</p></div>
                </div>
            </div>
        </div>
    </section>

</div>

<section id="testimonials" class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Apa Kata Klien Kami?</h2>
            <p class="text-muted">Kepuasan klien adalah prioritas utama kami.</p>
        </div>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="testimonial-card p-4">
                    <p class="fst-italic">"Kerja sama yang luar biasa! Tim JMC sangat profesional dan responsif. Hasil aplikasinya melebihi ekspektasi kami."</p>
                    <div class="d-flex align-items-center mt-3">
                        <div>
                            <h6 class="fw-bold mb-0">Andi Pratama</h6>
                            <small class="text-muted">CEO, Startup Maju</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="testimonial-card p-4">
                    <p class="fst-italic">"Website baru kami tidak hanya cepat, tapi juga sangat mudah digunakan. Terima kasih JMC atas kerja kerasnya!"</p>
                    <div class="d-flex align-items-center mt-3">
                        <div>
                            <h6 class="fw-bold mb-0">Siti Lestari</h6>
                            <small class="text-muted">Owner, Bunga Indah Florist</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php $this->stop() ?>
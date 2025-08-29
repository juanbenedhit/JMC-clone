<?php $this->layout('layouts::layout', ['title' => 'Beranda']) ?>

<?php $this->start('main_content') ?>

<section id="hero" class="d-flex align-items-center text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Solusi Digital untuk Masa Depan</h1>
        <p class="lead">Mewujudkan ide Anda menjadi solusi digital yang inovatif dan terpercaya.</p>
    </div>
</section>

<div class="container my-5">
    <section id="layanan" class="py-5">
        <h2 class="text-center section-title mb-5">Layanan Utama</h2>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/80" class="mb-3" alt="Ikon Layanan 1">
                        <h5 class="card-title fw-bold">Pengembangan Website</h5>
                        <p class="card-text">Layanan pembuatan website profesional untuk bisnis Anda.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/80" class="mb-3" alt="Ikon Layanan 2">
                        <h5 class="card-title fw-bold">Aplikasi Mobile</h5>
                        <p class="card-text">Mengembangkan aplikasi mobile untuk platform Android dan iOS.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 shadow-sm border-0">
                    <div class="card-body">
                        <img src="https://via.placeholder.com/80" class="mb-3" alt="Ikon Layanan 3">
                        <h5 class="card-title fw-bold">Desain UI/UX</h5>
                        <p class="card-text">Desain antarmuka yang modern dan mudah digunakan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portofolio" class="py-5">
        <h2 class="text-center section-title mb-5">Portofolio Proyek</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="https://via.placeholder.com/300x200?text=Proyek+1" class="card-img-top" alt="Proyek 1">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Sistem Informasi Akademik</h5>
                        <p class="card-text">Deskripsi singkat mengenai proyek dummy pertama.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="https://via.placeholder.com/300x200?text=Proyek+2" class="card-img-top" alt="Proyek 2">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Website Company Profile</h5>
                        <p class="card-text">Deskripsi singkat mengenai proyek dummy kedua.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card shadow-sm border-0">
                    <img src="https://via.placeholder.com/300x200?text=Proyek+3" class="card-img-top" alt="Proyek 3">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Aplikasi E-Commerce</h5>
                        <p class="card-text">Deskripsi singkat mengenai proyek dummy ketiga.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->stop() ?>
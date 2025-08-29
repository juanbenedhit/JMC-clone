<?php $this->layout('layouts::layout', ['title' => 'Aplikasi & Website Profesional']) ?>

<?php $this->start('main_content') ?>

<section id="page-hero" class="d-flex align-items-center text-center">
    <div class="container">
        <h1 class="display-5 fw-bold text-white">We Build Applications Beyond Your Expectation</h1>
        <p class="lead text-white-50">Selain membangun aplikasi yang berfungsi secara tepat, kami juga aktif memberikan saran inovasi pada aplikasi Anda.</p>
    </div>
</section>

<div class="container my-5">
    <div class="row">

        <div class="col-lg-9">
            <div class="pe-lg-4">
                <h2 class="section-title">Transformasi Digital Dimulai Dari Sini</h2>
                <p class="text-muted">Di era digital, memiliki aplikasi atau website yang andal bukan lagi pilihan, melainkan keharusan. Kami hadir sebagai partner teknologi Anda, mengubah ide dan kebutuhan bisnis menjadi solusi digital yang fungsional, menarik, dan aman. Tim kami terdiri dari para ahli yang berdedikasi untuk memberikan produk berkualitas tinggi yang tidak hanya memenuhi, tetapi melampaui ekspektasi Anda.</p>
                <hr class="my-4">

                <div id="layanan-detail">
                    <h4 class="fw-bold mb-3">Apa yang Kami Tawarkan?</h4>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-check-circle text-success fa-fw mt-1 me-3"></i>
                        <div>
                            <h6 class="fw-bold">Desain UI/UX Modern</h6>
                            <p class="small text-muted">Kami merancang antarmuka yang tidak hanya indah secara visual tetapi juga intuitif dan mudah digunakan oleh target audiens Anda.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-check-circle text-success fa-fw mt-1 me-3"></i>
                        <div>
                            <h6 class="fw-bold">Pengembangan Responsif</h6>
                            <p class="small text-muted">Setiap website dan aplikasi yang kami buat dijamin tampil sempurna di berbagai perangkat, mulai dari desktop hingga smartphone.</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-start mb-3">
                        <i class="fas fa-check-circle text-success fa-fw mt-1 me-3"></i>
                        <div>
                            <h6 class="fw-bold">Keamanan Terjamin</h6>
                            <p class="small text-muted">Kami menerapkan praktik keamanan terbaik untuk melindungi data bisnis dan pengguna Anda dari ancaman siber.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="sidebar-widget p-3 rounded">
                <h5 class="fw-bold mb-3">Kategori Layanan</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="sidebar-link active">Mobile Apps</a></li>
                    <li class="mb-2"><a href="#" class="sidebar-link">Web Base App</a></li>
                    <li class="mb-2"><a href="#" class="sidebar-link">Website</a></li>
                    <li class="mb-2"><a href="#" class="sidebar-link">GIS</a></li>
                    <li class="mb-2"><a href="#" class="sidebar-link">Integrasi Sistem</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<section id="cta" class="py-5 text-center text-white">
    <div class="container">
        <h2 class="fw-bold">Siap Memulai Proyek Anda?</h2>
        <p class="lead my-3">Jangan ragu untuk mendiskusikan ide Anda dengan kami.</p>
        <a href="?page=contact" class="btn btn-jmc-orange fw-bold">Hubungi Kami Sekarang</a>
    </div>
</section>

<?php $this->stop() ?>
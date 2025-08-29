<?php $this->layout('layouts::layout', ['title' => 'Blog - Artikel & Berita Terbaru']) ?>

<?php $this->start('main_content') ?>

<section id="page-hero" class="d-flex align-items-center text-center">
    <div class="container">
        <h1 class="display-5 fw-bold text-white">Blog & Artikel</h1>
        <p class="lead text-white-50">Wawasan terbaru seputar teknologi, tren industri, dan tips bisnis.</p>
    </div>
</section>

<div class="container my-5">
    <div class="row">

        <div class="col-lg-8">
            <div class="pe-lg-4">
                
                <div class="card blog-post-card mb-4">
                    <img src="images/blog/blog1.jpg" class="card-img-top" alt="Gambar Artikel">
                    <div class="card-body">
                        <div class="mb-2">
                            <span class="badge bg-primary">Teknologi</span>
                            <span class="text-muted small ms-2">3 hari yang lalu</span>
                        </div>
                        <h4 class="card-title fw-bold">5 Tren Teknologi yang Akan Mengubah Bisnis di 2025</h4>
                        <p class="card-text text-muted">Kecerdasan buatan, Internet of Things (IoT), dan teknologi lainnya terus berkembang. Pelajari bagaimana tren ini dapat memberikan keunggulan kompetitif bagi perusahaan Anda...</p>
                        <a href="#" class="btn btn-jmc-orange">Baca Selengkapnya</a>
                    </div>
                </div>

                <div class="card blog-post-card mb-4">
                    <img src="images/blog/blog2.jpg" class="card-img-top" alt="Gambar Artikel">
                    <div class="card-body">
                        <div class="mb-2">
                            <span class="badge bg-success">Tips Bisnis</span>
                            <span class="text-muted small ms-2">1 minggu yang lalu</span>
                        </div>
                        <h4 class="card-title fw-bold">Cara Memilih Aplikasi yang Tepat untuk UMKM</h4>
                        <p class="card-text text-muted">Memilih perangkat lunak yang tepat bisa menjadi tantangan. Berikut adalah panduan langkah demi langkah untuk membantu Anda mengambil keputusan terbaik bagi bisnis Anda...</p>
                        <a href="#" class="btn btn-jmc-orange">Baca Selengkapnya</a>
                    </div>
                </div>

                <nav aria-label="Page navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled"><a class="page-link" href="#">Sebelumnya</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Selanjutnya</a></li>
                  </ul>
                </nav>

            </div>
        </div>

        <div class="col-lg-4">
            <div class="sidebar-widget p-3 rounded mb-4">
                <h5 class="fw-bold mb-3">Cari Artikel</h5>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Ketik di sini...">
                    <button class="btn btn-jmc-orange" type="button">Cari</button>
                </div>
            </div>

            <div class="sidebar-widget p-3 rounded">
                <h5 class="fw-bold mb-3">Kategori</h5>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="sidebar-link">Teknologi</a></li>
                    <li class="mb-2"><a href="#" class="sidebar-link">Tips Bisnis</a></li>
                    <li class="mb-2"><a href="#" class="sidebar-link">Studi Kasus</a></li>
                    <li class="mb-2"><a href="#" class="sidebar-link">Berita Perusahaan</a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<?php $this->stop() ?>
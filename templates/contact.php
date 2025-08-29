<?php $this->layout('layouts::layout', ['title' => 'Contact Us - JMC']) ?>

<?php $this->start('main_content') ?>

<section class="contact-section" id="contact">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0">
                <div class="contact-info p-4 rounded-3">
                    <h2 class="section-title text-white">Hubungi Kami</h2>
                    <p class="text-white-50 mb-4">
                        Ada pertanyaan atau ingin memulai proyek bersama kami? Silakan isi formulir di samping atau hubungi kami melalui detail di bawah ini.
                    </p>
                    <div class="d-flex align-items-center mb-3 text-white">
                        <i class="fas fa-map-marker-alt fa-2x me-3"></i>
                        <span>Jl. Dummy No. 123, Jakarta, Indonesia</span>
                    </div>
                    <div class="d-flex align-items-center mb-3 text-white">
                        <i class="fas fa-phone-alt fa-2x me-3"></i>
                        <span>(021) 123-4567</span>
                    </div>
                    <div class="d-flex align-items-center text-white">
                        <i class="fas fa-envelope fa-2x me-3"></i>
                        <span>info@jmc-clone.com</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="card p-4 shadow-sm border-0">
                    <?php if (isset($_GET['status']) && $_GET['status'] == 'success'): ?>
                        <div class="alert alert-success">Terima kasih! Pesan Anda telah terkirim.</div>
                    <?php endif; ?>
                    <form action="?page=home&status=success#kontak" method="POST">
    <div class="mb-3">
        <label for="name" class="form-label fw-bold">Nama Anda</label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label fw-bold">Email Anda</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Contoh: nama@email.com" required>
    </div>
    <div class="mb-3">
        <label for="message" class="form-label fw-bold">Pesan Anda</label>
        <textarea id="message" name="message" class="form-control" rows="5" placeholder="Tuliskan pesan Anda di sini..." required></textarea>
    </div>
    <button type="submit" name="submit_contact" class="btn btn-jmc-orange w-100">Kirim Pesan</button>
</form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->stop() ?>
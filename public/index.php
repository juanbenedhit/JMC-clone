<?php
// Muat autoloader Composer
require '../vendor/autoload.php';

// Inisialisasi Plates
$templates = new League\Plates\Engine('../templates');
// Daftarkan folder partials agar mudah dipanggil
$templates->addFolder('partials', '../templates/partials');
$templates->addFolder('layouts', '../templates/layouts');


// Logika untuk menangani form kontak
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    // Kirim ucapan terima kasih kepada pengirim
    $to = $email;
    $subject = "Terima Kasih Telah Menghubungi Kami";
    $body = "Halo {$name},\n\nTerima kasih atas pesan Anda. Kami akan segera meresponsnya.";
    $headers = "From: no-reply@jmc-clone.com";
    @mail($to, $subject, $body, $headers); // Mengirim email

    header("Location: ?page=contact&status=success");
    exit();
}

// Router sederhana
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'aplikasi-website':
        echo $templates->render('aplikasi-website', ['title' => 'Aplikasi & Website']);
        break;
    case 'about':
        echo $templates->render('about', ['title' => 'About Us']);
        break;
    case 'contact':
        echo $templates->render('contact', ['title' => 'Contact Us']);
        break;
    case 'blog':
        echo $templates->render('blog', ['title' => 'Blog']);
        break;
    case 'home':
    default:
        echo $templates->render('home', ['title' => 'Beranda']);
        break;
}
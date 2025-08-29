<?php
// Muat autoloader Composer
require '../vendor/autoload.php';

// Inisialisasi Plates
$templates = new League\Plates\Engine('../templates');
$templates->addFolder('partials', '../templates/partials');
$templates->addFolder('layouts', '../templates/layouts');


// Logika untuk menangani form kontak
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {
    // 1. Sertakan file koneksi database Anda
    require '../app/db.php';

    // 2. Ambil dan bersihkan data dari form
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    try {
        // 3. Siapkan perintah SQL untuk memasukkan data (Prepared Statement)
        $sql = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $pdo->prepare($sql);

        // 4. Bind parameter untuk keamanan (mencegah SQL Injection)
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        // 5. Eksekusi perintah
        $stmt->execute();

    } catch(PDOException $e) {
        // Jika terjadi error, tampilkan pesan (opsional, bisa diganti log error)
        die("Error: Tidak bisa menyimpan data. " . $e->getMessage());
    }

    // Mengirim email ucapan terima kasih (fungsionalitas yang sudah ada)
    $to = $email;
    $subject = "Terima Kasih Telah Menghubungi Kami";
    $body = "Halo {$name},\n\nTerima kasih atas pesan Anda. Kami akan segera meresponsnya.";
    $headers = "From: no-reply@jmc-clone.com";
    @mail($to, $subject, $body, $headers);

    // Redirect kembali ke halaman home dengan anchor ke seksi kontak
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
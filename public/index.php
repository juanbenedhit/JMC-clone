<?php
require '../vendor/autoload.php';

$templates = new League\Plates\Engine('../templates');
$templates->addFolder('partials', '../templates/partials');
$templates->addFolder('layouts', '../templates/layouts');


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_contact'])) {
    require '../app/db.php';

    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = filter_var($_POST['message'], FILTER_SANITIZE_STRING);

    try {
        $sql = "INSERT INTO contacts (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $pdo->prepare($sql);

        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':message', $message);

        $stmt->execute();

    } catch(PDOException $e) {
        die("Error: Tidak bisa menyimpan data. " . $e->getMessage());
    }

    $to = $email;
    $subject = "Terima Kasih Telah Menghubungi Kami";
    $body = "Halo {$name},\n\nTerima kasih atas pesan Anda. Kami akan segera meresponsnya.";
    $headers = "From: no-reply@jmc-clone.com";
    @mail($to, $subject, $body, $headers);

    header("Location: ?page=contact&status=success");
    exit();
}

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
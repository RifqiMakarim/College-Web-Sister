<?php
include __DIR__ . '/../layout/header.php';
?>

<div class="bg-white p-4 md:p-8 rounded-lg shadow-md text-center">

    <h1 class="text-3xl md:text-4xl font-bold text-gray-800 mb-4">
        Selamat Datang, <?php echo htmlspecialchars($_SESSION['user']['username'] ?? 'Pengguna'); ?>!
    </h1>

    <p class="text-gray-600 text-base md:text-lg max-w-2xl mx-auto">
        Selamat datang di Sistem Informasi Akademik. Silakan kelola data Mahasiswa, Dosen, dan Mata Kuliah melalui menu navigasi yang tersedia.
    </p>

    <div class="mt-8">
        <a href="/College-Web-Sister/public/mahasiswa" class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-3 px-6 rounded-lg transition duration-300">
            Lihat Data Mahasiswa
        </a>
    </div>

    <div class="mt-8">
        <img src="/College-Web-Sister/public/img/Logo_SIA.png" alt="logo" class="mx-auto rounded-lg shadow-lg w-full sm:w-3/4 lg:w-1/2 max-w-md">
    </div>
</div>

<?php

include __DIR__ . '/../layout/footer.php';
?>
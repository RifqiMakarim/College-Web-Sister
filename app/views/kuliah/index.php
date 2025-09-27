<?php
$pageTitle = 'Data Perkuliahan';
include __DIR__ . '/../layout/header.php';

// Ambil nilai filter yang sedang aktif untuk ditampilkan kembali di form
$current_nim = $_GET['nim'] ?? '';
$current_nip = $_GET['nip'] ?? '';
$current_kode_matkul = $_GET['kode_matkul'] ?? '';
?>

<div class="bg-white p-8 rounded-lg shadow-md">
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-3xl font-bold text-gray-800">Data Perkuliahan</h1>
        <a href="/College-Web-Sister/public/kuliah/create" class="bg-gray-700 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-lg transition duration-300">
            + Tambah Data Kuliah
        </a>
    </div>

    <form method="GET" action="" class="mb-6 bg-gray-50 p-4 rounded-lg border">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 items-end">
            <div>
                <label for="nim" class="block text-sm font-medium text-gray-700 mb-1">Mahasiswa</label>
                <select name="nim" id="nim" class="w-full p-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Semua Mahasiswa</option>
                    <?php foreach ($mahasiswa_list as $mhs): ?>
                        <option value="<?= htmlspecialchars($mhs['nim']) ?>" <?= $current_nim == $mhs['nim'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($mhs['nama']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label for="nip" class="block text-sm font-medium text-gray-700 mb-1">Dosen</label>
                <select name="nip" id="nip" class="w-full p-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Semua Dosen</option>
                    <?php foreach ($dosen_list as $dosen): ?>
                        <option value="<?= htmlspecialchars($dosen['nip']) ?>" <?= $current_nip == $dosen['nip'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($dosen['nama']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div>
                <label for="kode_matkul" class="block text-sm font-medium text-gray-700 mb-1">Mata Kuliah</label>
                <select name="kode_matkul" id="kode_matkul" class="w-full p-2 border rounded-lg focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">Semua Mata Kuliah</option>
                    <?php foreach ($matkul_list_all as $matkul): ?>
                        <option value="<?= htmlspecialchars($matkul['kodematkul']) ?>" <?= $current_kode_matkul == $matkul['kodematkul'] ? 'selected' : '' ?>>
                            <?= htmlspecialchars($matkul['namamatkul']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="flex space-x-2">
                <button type="submit" class="w-full bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Filter</button>
                <a href="/College-Web-Sister/public/kuliah" class="w-full text-center bg-gray-500 hover:bg-gray-600 text-white font-bold py-2 px-4 rounded-lg transition duration-300">Reset</a>
            </div>
        </div>
    </form>

    <div class="overflow-x-auto">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xm text-gray-700 uppercase bg-gray-50">
                <tr>
                    <th scope="col" class="py-3 px-6">Nama Mahasiswa</th>
                    <th scope="col" class="py-3 px-6">Nama Dosen</th>
                    <th scope="col" class="py-3 px-6">Mata Kuliah</th>
                    <th scope="col" class="py-3 px-6 text-center">Nilai</th>
                    <th scope="col" class="py-3 px-6 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($kuliah_list) && count($kuliah_list) > 0): ?>
                    <?php foreach ($kuliah_list as $kuliah): ?>
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="py-4 px-6 font-medium text-gray-900"><?= htmlspecialchars($kuliah['mahasiswa']) ?></td>
                            <td class="py-4 px-6 font-medium text-gray-900"><?= htmlspecialchars($kuliah['dosen']) ?></td>
                            <td class="py-4 px-6 font-medium text-gray-900"><?= htmlspecialchars($kuliah['namamatkul']) ?></td>
                            <td class="py-4 px-6 font-medium text-gray-900 text-center"><?= htmlspecialchars($kuliah['nilai']) ?></td>
                            <td class="py-4 px-6">
                                <div class="flex flex-col sm:flex-row items-center justify-center gap-2">
                                    <a href="/College-Web-Sister/public/kuliah/edit/<?= $kuliah['nim'] ?>/<?= $kuliah['nip'] ?>/<?= $kuliah['kodematkul'] ?>"
                                        class="w-full sm:w-auto bg-gray-600 hover:bg-gray-800 text-white font-bold py-2 px-4 rounded-lg transition duration-300 text-sm text-center">
                                        Edit
                                    </a>
                                    <a href="/College-Web-Sister/public/kuliah/delete/<?= $kuliah['nim'] ?>/<?= $kuliah['nip'] ?>/<?= $kuliah['kodematkul'] ?>"
                                        class="w-full sm:w-auto bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-lg transition duration-300 text-sm text-center"
                                        onclick="return confirm('Yakin ingin hapus?')">
                                        Hapus
                                    </a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5" class="py-4 px-6 text-center text-gray-500">
                            Tidak ada data yang cocok dengan filter. Coba reset filter.
                        </td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

<?php
include __DIR__ . '/../layout/footer.php';
?>
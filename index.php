<?php

$keyword = trim($_GET['keyword'] ?? '');
$kategori = trim($_GET['kategori'] ?? 'semua');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi Dasar PHP Form</title>
</head>
<body>
    <h2>Contoh Form Get</h2>
    <form method="get" action="">
        <label for="keyword">Keyword Pencarian</label>
        <input id="keyword" name="keyword" type="text" value="<?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8') ?>" placeholder="Contoh: Laptop">
      
        <label for="kategori">Kategori:</label>
        <select id="kategori" name="kategori">
            <option value="semua" <?= $kategori === 'semua' ? 'selected' : '' ?>>Semua</option>
            <option value="Elektronik" <?= $kategori === 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
            <option value="Pakaian" <?= $kategori === 'Pakaian' ? 'selected' : '' ?>>Pakaian</option>
            <option value="Makanan" <?= $kategori === 'Makanan' ? 'selected' : '' ?>>Makanan</option>
        </select>
        <br><br>
        <button type="submit">Cari</button>
    </form>

    <?php if (isset($_GET['keyword']) || isset($_GET['kategori'])): ?>
        <div class="result">
            <strong>Hasil GET:</strong><br>
            Keyword: <?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8') ?><br>
            Kategori: <?= htmlspecialchars($kategori, ENT_QUOTES, 'UTF-8') ?>

        </div>
        <?php endif; ?>
</body>
</html>
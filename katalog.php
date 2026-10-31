<?php
declare(strict_types=1);
require 'data.php';
require 'functions.php';

$semuaGenre = array_unique(array_column($koleksiMusik, 'genre'));

$genrePilihan = $_GET['genre'] ?? '';
if ($genrePilihan !== '') {
    $koleksiMusik = filterBerdasarkanGenre($koleksiMusik, $genrePilihan);
}

$sortPilihan = $_GET['sort'] ?? '';
if ($sortPilihan !== '') {
    $koleksiMusik = urutkanKatalog($koleksiMusik, $genrePilihan);
}

$totalLagu = count($koleksiMusik)
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Music Vault</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1> Katalog Music </h1>
        <nav>
            <ul>
                <li><a href="index.php"> Profil </a></li>
                <li><a href="katalog.php"></a> Katalog </li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="ringkasan">
            <h2> Katalog Koleksi </h2>
            <p> Menampilkan <?= htmlspecialchars((string)$totalLagu) ?> lagu. </p>

            <form action="katalog.php" mathod="GET" class="form-filter">
                <select name="sort">
                    <option value=""> Urutkan Berdasarkan </option>
                    <option value="judul_az" <?= ($sortPilihan === 'judul_az') ? 'selected' : '' ?>> Judul (A-Z) </option>
                    <option value="judul_za" <?= ($sortPilihan === 'judul_za') ? 'selected' : '' ?>> Judul (Z-A) </option>
                    <option value="tahun_baru" <?= ($sortPilihan === 'tahun_baru') ? 'selected' : '' ?>> Tahun (Terbaru) </option>
                    <option value="tahun_lama" <?= ($sortPilihan === 'tahun_lama') ? 'selected' : '' ?>> Tahun (Terbaru) </option>
                </select>

                <select name="genre">
                    <option value=""> Filter Berdasarkan Genre </option>
                    <?php foreach ($semuaGenre as $genre): ?>
                        <option value="<?= htmlspecialchars($genre) ?>" <?= ($genrePilihan === $genre) ? 'selected' : '' ?>> <?= htmlspecialchars($genre) ?> </option>
                    <?php endforeach; ?>
                </select>

                <button type="submit"> Terapkan </button>
                <a href="katalog.php" class="btn-reset"> Reset </a>
            </form>
        </section>

        <section class="gird-katalog">
            <?php foreach ($koleksiMusik as $lagu): ?>
                <article class="kartu-lagu">
                    <img src="assets/<?= htmlspecialchars($lagu['gambar']) ?>"
                        alt="Cover album <?= htmlspecialchars($lagu['judul']) ?> karya <?= htmlspecialchars($lagu['artis']) ?>"
                        class="cover-album">

                    <h3> <?= htmlspecialchars($lagu['judul']) ?> </h3>
                    <p>Artis:  <?= htmlspecialchars($lagu['artis']) ?> </p>
                    <p>Genre: <?= htmlspecialchars($lagu['genre']) ?> </p>

                    <?php 
                        $era = dapatkanEraLagu($lagu['tahun']);
                        $warnaBadge = ($era === "Klasik") ? "badge-klasik" : "badge-modern";
                    ?>

                    <span class="<?= $warnaBadge ?>"> <?= $era ?> (<?= htmlspecialchars((string)$lagu['tahun']) ?>) </span>
                </article>
            <?php endforeach; ?>
        </section>
    </main>
</body>
</html>
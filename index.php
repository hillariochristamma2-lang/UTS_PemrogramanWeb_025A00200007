<?php
declare(strict_types=1);

$nama   = 'Hillario Jasson Vlavian Vega Christamma';
$prodi  = 'Informatika';
$univ   = 'Tiga Serangkai University';
$asal   = 'Surakarta';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profil - Kolektor Music</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>My Music Vault</h1>
        <nav>
            <ul>
                <li><a href="index.php"> Profil </a></li>
                <li><a href="katalog.php"> Katalog </a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="profil-kolektok">
            <h2> Profil Kolektor </h2>
            <img src="" alt="Foto Profil" <?= htmlspecialchars($nama) ?> class="foto-profil">

            <h3> <?= htmlspecialchars($nama) ?></h3>
            <p> Mahasiswa <?= htmlspecialchars($prodi) ?> di <?= htmlspecialchars($univ) ?>, asal <?= htmlspecialchars($asal) ?>. </p>
            <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt voluptatibus, vitae eaque minima nam perferendis, sint repellendus modi obcaecati, culpa facere. Facilis suscipit expedita enim incidunt eaque necessitatibus nemo in? </p>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 <?= htmlspecialchars($nama) ?>. Proyek UTS Pemrogaman Web </p>
    </footer>
</body>
</html>
<?php
declare(strict_types=1);

function filterBerdasarkanGenre(array $data, string $genreTarget): array {
    return array_filter($data, function($lagu) use ($genreTarget) {
        return strtoLower($lagu['genre']) === strtoLower($genreTarget);
    });
}

function urutkanKatalog(array $data, string $tipeSort): array {
    usort($data, function($a, $b) use ($tipeSort) {
        return match ($tipeSort) {
            'judul_az' => strcasecmp($a['judul'], $b['judul']),
            'judul_za' => strcasecmp($b['judul'], $a['judul']),
            'tahun_baru' => $b['tahun'] <=> $a['tahun'],
            'tahun_lama' => $a['tahun'] <=> $b['tahun'],
            default => 0,
        };
    } );
    return $data;
}

function dapatkanEraLagu(int $tahun): string {
    if ($tahun <2000) {
        return "Klasik";
    }
    return "Modern";
}
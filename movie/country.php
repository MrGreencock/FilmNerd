<?php

$apiKey = "042affdd15dc4426dae949def44f0cbb";
$movieId = "11902"; // "Szegény párák" című film azonosítója
$apiUrl = "https://api.themoviedb.org/3/movie/$movieId?api_key=$apiKey";

// cURL inicializálása
$ch = curl_init();

// cURL beállítása
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// API válaszának lekérése
$response = curl_exec($ch);

// cURL bezárása
curl_close($ch);

// JSON válasz dekódolása
$data = json_decode($response, true);

// Képek alap URL-je
$baseImageUrl = "https://image.tmdb.org/t/p/original";

// Háttérkép megjelenítése
if (isset($data['backdrop_path']) && !empty($data['backdrop_path'])) {
    $fullBackdropUrl = $baseImageUrl . $data['backdrop_path'];
    echo "<div class='banner' style='background-image: url($fullBackdropUrl);'></div>";
} else {
    echo "Nincs elérhető háttérkép";
}

// Poszterkép megjelenítése
if (isset($data['poster_path']) && !empty($data['poster_path'])) {
    $fullPosterUrl = $baseImageUrl . $data['poster_path'];
    echo "<img class='cover' src='$fullPosterUrl'>";
} else {
    echo "Nincs elérhető poszterkép";
}
?>

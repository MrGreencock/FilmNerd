<?php
$apiKey = "042affdd15dc4426dae949def44f0cbb";
$movieId = "792307"; // "Szegény párák" című film azonosítója
$apiUrl = "https://api.themoviedb.org/3/movie/$movieId/credits?api_key=$apiKey";

// cURL inicializálása
$ch = curl_init();

// cURL beállítása
curl_setopt($ch, CURLOPT_URL, $apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// API válaszának lekérése
$response = curl_exec($ch);

// cURL bezárása
curl_close($ch);

// Válasz dekódolása (JSON -> PHP tömb)
$data = json_decode($response, true);

// Adatok megjelenítése
$baseImageUrl = "https://image.tmdb.org/t/p/original"; // A TMDB képszerver URL-je

    $fullPosterUrl = "https://image.tmdb.org/t/p/original/ut9H3tisso4mxair8w6ioYvP6Vs.jpg";
    echo "<img class='cover' src='$fullPosterUrl' alt='Film poszter'>";
if (isset($data['cast']) && is_array($data['cast'])) {
    
    echo "<h1>Színészek listája</h1>";
    echo "<ul>";
    foreach ($data['cast'] as $actor) {
        $actorName = $actor['name'];
        $characterName = $actor['character'];
        $profilePath = $actor['profile_path']; // Színész fotójának elérési útja
        $profileUrl = $baseImageUrl . $profilePath; // Teljes URL a színész fotójához

        echo "<li>";
        if ($profilePath) {
            echo "<img src='$profileUrl' alt='$actorName' style='width:100px;'><br>";
        }
        echo "$actorName mint $characterName";
        echo "</li>";
    }
    echo "</ul>";
} else {
    echo "Nem sikerült lekérni a színészek listáját.";
}
?>



<?php
$players = ['Aljosha'];
$apiKey = ''; // developer.hypixel.net
$cacheFile = 'player_stats_cache.json'; // Cache file
$cacheTime = 3600; // Cache duration in seconds

// Check if cache file exists and is fresh
if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
    $data = json_decode(file_get_contents($cacheFile), true);
} else {
    $data = [];
    foreach ($players as $playerName) {
        $url = "https://api.hypixel.net/player?key=$apiKey&name=$playerName";
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);
        $playerData = json_decode($response, true);
        if ($playerData['success']) {
            $data[$playerName] = $playerData['player']['stats']['Bedwars'];
        }
    }
    // Save the fetched data to cache
    file_put_contents($cacheFile, json_encode($data));
}

// Use $data here for your application
echo "<pre>";
print_r($data); // Example usage
echo "</pre>";
?>

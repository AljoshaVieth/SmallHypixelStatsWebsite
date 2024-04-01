# SmallHypixelStatsWebsite
A tiny website displaying some stats of the hypixel api for a few players.
![image](https://github.com/AljoshaVieth/SmallHypixelStatsWebsite/assets/12802765/7d26a379-3935-4c29-885d-3939582c5fea)

# Api usage and caching
This website uses caching to reduce requests to the Hypixel Api.

The script cache.php is executed via a cronjob (every 2 to 5 min) and caches the date in a file called player_stats_cache.json which is then used by the index.php.

Used endpoint:
```
https://api.hypixel.net/player?key=$apiKey&name=$playerName
```

# Disclaimer
This project is not affiliated with Hypixel or Mojang. All trademarks belong to their respective owners.

The html, js and css of this site is based on the **Album example** by Bootstrap.
The js in the js folder is Licensed under the Creative Commons Attribution 3.0 Unported License.

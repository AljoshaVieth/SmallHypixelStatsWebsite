<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
    <script src="js/color-modes.js"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Aljosha">
    <title>BedWars Stats</title>
    <link rel="icon" type="image/webp" href="favicon.webp">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="theme-color" content="#712cf9">


    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        .custom-table .table {
            border: 0;
        }

        .custom-table th,
        .custom-table td {
            border: 0;
        }

        .custom-table th {
            padding-left: 1em;
            /* Adjust the left padding for numbers */
        }

        .custom-table td {
            text-align: right;
            /* Adjust the right padding for names */
        }


        /* Reduce vertical spacing in the header */
        .text-center.container {
            padding-top: 0;
            /* Reduce top padding */
            padding-bottom: 0;
            /* Reduce bottom padding */
        }

        .row.py-lg-5 {
            padding-top: 0 !important;
            /* Remove padding-top on large screens */
            padding-bottom: 0 !important;
            /* Remove padding-bottom on large screens */
        }

        .col-lg-6.col-md-8.mx-auto h1 {
            margin-top: 0;
            /* Remove margin-top */
            margin-bottom: 0.5rem;
            /* Reduce margin-bottom */
            font-size: 1.25rem;
            /* Reduce font size */
        }

        @media (min-width: 768px) {
            .col-lg-6.col-md-8.mx-auto h1 {
                font-size: 2rem;
                /* Slightly larger font size for larger screens */
            }
        }
    </style>


</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
        <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button"
            aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
            <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
                <use href="#circle-half"></use>
            </svg>
            <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
        </button>
        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#sun-fill"></use>
                    </svg>
                    Light
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark"
                    aria-pressed="false">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#moon-stars-fill"></use>
                    </svg>
                    Dark
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
            <li>
                <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto"
                    aria-pressed="true">
                    <svg class="bi me-2 opacity-50" width="1em" height="1em">
                        <use href="#circle-half"></use>
                    </svg>
                    Auto
                    <svg class="bi ms-auto d-none" width="1em" height="1em">
                        <use href="#check2"></use>
                    </svg>
                </button>
            </li>
        </ul>
    </div>

    <main>
        <section class="py-5 text-center container">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto">
                    <h1 class="fw-light">Hypixel Stats</h1>
                </div>
            </div>
        </section>

        <div class="album py-5 bg-body-tertiary">
            <div class="container">

                <div class="album py-5 bg-body-tertiary">
                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php
                            $cacheFile = 'player_stats_cache.json'; // The cache file where player stats are stored
                
                            if (file_exists($cacheFile)) {
                                $cachedData = json_decode(file_get_contents($cacheFile), true);
                
                                foreach ($cachedData as $playerName => $bedwarsStats) {
                                    $playerImage = "https://cravatar.eu/helmavatar/" . urlencode($playerName) . "/256";
                                    echo '<div class="col">';
                                    echo '<div class="card shadow-sm">';
                                    echo "<img src='$playerImage' width='100%' focusable='false' alt='Player avatar'>"; // Display player avatar
                                    echo '<div class="card-body">';
                                    echo "<p class='card-text'>";
                                    echo "<div class='custom-table'>";
                                    echo "<table class='table'>";
                
                                    // Dynamically generate table rows for each stat
                                    echo "<tr><th scope='row'>EP</th><td>" . $bedwarsStats["Experience"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Spiele gespielt</th><td>" . $bedwarsStats["games_played_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Siege</th><td>" . $bedwarsStats["wins_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Tode</th><td>" . $bedwarsStats["deaths_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Tötungen</th><td>" . $bedwarsStats["kills_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Endgültige Tötungen</th><td>" . $bedwarsStats["final_kills_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Betten zerstört</th><td>" . $bedwarsStats["beds_broken_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Gekaufte Gegenstände</th><td>" . $bedwarsStats["items_purchased_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Eisen gesammelt</th><td>" . $bedwarsStats["iron_resources_collected_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Gold gesammelt</th><td>" . $bedwarsStats["gold_resources_collected_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Diamanten gesammelt</th><td>" . $bedwarsStats["diamond_resources_collected_bedwars"] . "</td></tr>";
                                    echo "<tr><th scope='row'>Smaragde gesammelt</th><td>" . $bedwarsStats["emerald_resources_collected_bedwars"] . "</td></tr>";
                
                                    echo "</table>";
                                    echo "</div>";
                                    echo "</p>";
                                    echo '<div class="d-flex justify-content-between align-items-center">';
                                    echo '<div class="btn-group">';
                                    echo "<a href='https://plancke.io/hypixel/player/stats/$playerName#BedWars' target='_blank' class='btn btn-sm btn-outline-secondary'>Mehr Statistiken</a>";
                                    echo '</div>';
                                    echo '</div>';
                                    echo '</div>'; // Close card-body
                                    echo '</div>'; // Close card
                                    echo '</div>'; // Close column
                                }
                            } else {
                                echo "<p>Cache file not found. Please ensure the cache has been generated.</p>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>

    </main>

    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="float-end mb-1">
                <a href="#">Back to top</a>
            </p>
            <p class="mb-1">This site is based on the <b>Album example</b> by Bootstrap.</p>
            <p class="mb-0">Data fetched from the <a href="https://developer.hypixel.net/" target="_blank">Hypixel
                    API</a>.</p>
            <p>This project is not affiliated with Hypixel or Mojang. All trademarks belong to their respective owners.</p>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>

</body>

</html>
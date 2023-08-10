<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Dashboard</title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Lora:wght@400;500;600;700&family=Gelasio:wght@400;500;600;700&family=JetBrains+Mono:wght@100;200;300;400;500;600;700;800&family=Nunito:wght@300;400;500;600;700;800;900;1000&family=Poppins:wght@300;400;500;600;700;800;900&family=Press+Start+2P&family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- ICONS CDN -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- LINK CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body class="body">

    <div class="fullScreen">
        <div class="inputBox">
            <input type="text" placeholder="Rechercher...">
            <button type="submit">
                <span class="material-icons-round">
                    search
                </span>
            </button>
        </div>
        <div class="closeBtn">
            <span class="material-icons-round">
                close
            </span>
        </div>
    </div>
    <section class="header">
        <div class="logo">
            <a href="/"><img src="assets/imgs/logo-lv.svg" alt=""></a>

        </div>
        <div class="logo-mobile">
            <span class="material-icons-round menu">
                menu
            </span>
            <img src="assets/imgs/logo-nt.svg" alt="">
        </div>
        <div class="header-items">
            <span class="material-icons-round myBtn">
                search
            </span>
            <span class="material-icons-round">
                notifications
            </span>
            <span class="material-icons-round">
                inventory_2
            </span>
            <a href="profile.php">
                <div class="profile">
                    <img src="assets/imgs/profile-1.jpg" alt="">
                </div>
            </a>
            <div class="dark-theme-btn">
                <span class="material-icons-round moon">
                    dark_mode
                </span>
                <span class="material-icons-round sun">
                    light_mode
                </span>
            </div>
        </div>
    </section>
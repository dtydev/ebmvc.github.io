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
            <div class="profile">
                <img src="assets/imgs/profile-1.jpg" alt="">
            </div>
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

    <section class="main">
        <div class="sidebar">
            <ul class="sidebar-items">
                <li>
                    <a href="/" class="sidebar-link">
                        <span class="material-icons-round">space_dashboard</span>
                        <div class="sidebar-item">Dashboard</div>
                    </a>
                </li>
                <li>
                    <a href="newest.html" class="sidebar-link">
                        <span class="material-icons-round">fiber_new</span>
                        <div class="sidebar-item">Nouveautés</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <span class="material-icons-round">schedule</span>
                        <div class="sidebar-item">Prochainement</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <span class="material-icons-round">stacked_bar_chart</span>
                        <div class="sidebar-item">Database</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <span class="material-icons-round">travel_explore</span>
                        <div class="sidebar-item">Univers</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <span class="material-icons-round">diversity_2</span>
                        <div class="sidebar-item">Communauté</div>
                    </a>
                </li>
            </ul>
            <ul class="sidebar-bottom-items">
                <li>
                    <a href="support.html" class="sidebar-link">
                        <span class="material-icons-round">help</span>
                        <div class="sidebar-item">Support</div>
                    </a>
                </li>
                <li>
                    <a href="#" class="sidebar-link">
                        <span class="material-icons-round">logout</span>
                        <div class="sidebar-item">Déconnexion</div>
                    </a>
                </li>
                <span class="copy">&copy;</span>
                <p>2023</p>
            </ul>
        </div>
        <div class="main-container">
            <!-- <div class="section-title">
                <h3 class="title">Bienvenue, User1</h3>
                <select name="date" id="date">
                    <option value="last7">7 derniers jours</option>
                    <option value="last7">Le mois dernier</option>
                    <option value="last7">L'année dernière</option>
                    <option value="last7">Toujours</option>
                </select>
            </div> -->
            <div class="cards">
                <div class="card">
                    <div class="card-title">
                        <span>BDs</span>
                        <span class="material-icons-round icon">volcano</span>
                    </div>
                    <h3 class="card-value">12</h3>
                    <p>Il y a un total de <span>12</span> bandes dessinées dans notre base.</p>
                </div>
                <div class="card">
                    <div class="card-title">
                        <span>Comics</span>
                        <span class="material-icons-round icon">volcano</span>
                    </div>
                    <h3 class="card-value">12</h3>
                    <p>Il y a un total de <span>12</span> comics dans notre base.</p>
                </div>
                <div class="card">
                    <div class="card-title">
                        <span>Mangas</span>
                        <span class="material-icons-round icon">volcano</span>
                    </div>
                    <h3 class="card-value">12</h3>
                    <p>Il y a un total de <span>12</span> mangas dans notre base.</p>
                </div>
                <div class="card">
                    <div class="card-title">
                        <span>Wiki</span>
                        <span class="material-icons-round icon">volcano</span>
                    </div>
                    <h3 class="card-value">1,123</h3>
                    <p>L'encyclopédie compte un total de <span>1,123</span> articles dans notre base.</p>
                </div>
            </div>
            <div class="last-future">
                <!-- <a href="#" class="home-newest">
                    <div style="display: flex; flex-direction: column; justify-content: space-between; height: 100%;">
                        <h2 style="padding: 2rem; color: var(--color-emerald);">Sortie du mois</h2>
                        <div class="article-title-section">
                            <div style="display: flex; flex-direction: column; width: 90%;">
                                <div class="date">01/08/2023</div>
                                <h2>Titre test article</h2>
                                <span class="category"></span>
                                <span class="editor"></span>
                                <span class="universe"></span>
                            </div>
                            <button class="btn-dash">voir</button>
                        </div>
                    </div>
                </a> -->
                <a href="#" class="home-card-new">
                    <img src="https://wegotthiscovered.com/wp-content/uploads/2022/05/Batman-Damned-header.jpg" alt="Batman wallpaper" />

                    <div class="content">
                        <h1>The Batman</h1>
                        <div class="infos">
                            <button class="btn-dash">Voir</button>
                        </div>
                    </div>
                </a>
                <div class="lf-section">
                    <div class="f-dc">
                        <div class="f-dc-title">Top DC Heros</div>
                        <div class="f-dc-items">
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #1 </div>
                                <img src="assets/imgs/batmancard.png" alt="" style="width: auto; height: 100px;">
                                <p>Batman</p>
                            </a>
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #2 </div>
                                <img src="assets/imgs/supermancard2.png" alt="" style="width: auto; height: 100px;">
                                <p>Superman</p>
                            </a>
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #3 </div>
                                <img src="assets/imgs/wonderwomancard.png" alt="" style="width: auto; height: 100px;">
                                <p>Wonder Woman</p>
                            </a>
                            <!-- <a href="#" class="card-fav-heroes">
                                <img src="imgs/aquaman.png" alt="" style="width: auto; height: 100px;">
                                <p>Aquaman</p>
                            </a> -->
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #4 </div>
                                <img src="assets/imgs/jokercard2.png" alt="" style="width: auto; height: 100px;">
                                <p>Joker</p>
                            </a>
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #5 </div>
                                <img src="assets/imgs/harleycard.png" alt="" style="width: auto; height: 100px;">
                                <p>Harley Quinn</p>
                            </a>
                        </div>
                    </div>
                    <div class="f-marvel">
                        <div class="f-marvel-title">Top Marvel Heros</div>
                        <div class="f-marvel-items">
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #1 </div>
                                <img src="assets/imgs/spidermancard.png" alt="" style="width: auto; height: 100px;">
                                <p>Spider-Man</p>
                            </a>
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #2 </div>
                                <img src="assets/imgs/ironman.png" alt="" style="width: auto; height: 100px;">
                                <p>Iron Man</p>
                            </a>
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #3 </div>
                                <img src="assets/imgs/loki.png" alt="" style="width: auto; height: 100px;">
                                <p>Loki</p>
                            </a>
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #4 </div>
                                <img src="assets/imgs/blackpanther.png" alt="" style="width: auto; height: 100px;">
                                <p>Black Panther</p>
                            </a>
                            <a href="#" class="card-fav-heroes">
                                <div class="rank">
                                    #5 </div>
                                <img src="assets/imgs/hulkcard.png" alt="" style="width: auto; height: 100px;">
                                <p>Hulk</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table">
                <div class="section-title">
                    <h3 class="title">Derniers ajouts dans la base</h3>
                    <div></div>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>Date</th>
                            <th>Categorie</th>
                            <th>Editeur</th>
                            <th>Univers</th>
                            <th>Titre</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>01/08/23</td>
                            <td>Comics</td>
                            <td>Urban Comics</td>
                            <td>DC Comics</td>
                            <td>Titre de test</td>
                            <td>
                                <a href="#">
                                    <span class="material-icons-round">east</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01/08/23</td>
                            <td>Manga</td>
                            <td>Kana</td>
                            <td>Astro Boy</td>
                            <td>Titre de test</td>
                            <td>
                                <a href="#">
                                    <span class="material-icons-round">east</span>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>01/08/23</td>
                            <td>BDs</td>
                            <td>Glénat</td>
                            <td>Les Mondes Electriques</td>
                            <td>Titre de test</td>
                            <td>
                                <a href="#">
                                    <span class="material-icons-round">east</span>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="advertising-cards">
                <div class="ad-card"></div>
                <div class="ad-card"></div>
                <div class="ad-card"></div>
            </div>
        </div>
    </section>


    <script src="assets/js/main.js"></script>
    <script src="assets/js/searchbar.js"></script>
    <script src="assets/js/active.js"></script>

</body>

</html>
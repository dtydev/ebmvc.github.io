<?php
include('includes/header.php');
?>

<section class="main">
    <?php
    include('includes/sidebar.php');
    ?>
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
        <div style="width: 90%; margin: 0 auto;">
            <div class="profile-wrapper">
                <div class="profile-avatar">
                    <img src="assets/imgs/profile-1.jpg" alt="" class="profile-img">
                    <div class="profile-name">User-test</div>
                </div>
                <img src="https://wegotthiscovered.com/wp-content/uploads/2022/05/Batman-Damned-header.jpg" alt="" class="profile-cover">
                <div class="profile-menu">
                    <a class="profile-menu-link active">Général</a>
                    <a class="profile-menu-link">Modifier le profil</a>
                </div>
            </div>
        </div>
        <?php
            include ('includes/profile/index.php');
        ?>
    </div>
</section>


<?php
include('includes/footer.php');
?>
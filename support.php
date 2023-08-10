<?php
        include ('includes/header.php');
    ?>

    <section class="main">
        <?php
            include ('includes/sidebar.php');
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
            <h2 style="color: var(--text-color-first);">Support</h2>
            <div style="display: flex; flex-direction: column; width: 100%; height: 300px; border-radius: 4px; padding: 15px;">
                <h3 style="margin-bottom: 0.8rem; color: var(--box-support-title); font-size: 1.2rem;">Catégories</h3>
                <div style="display: flex; width: 100%; height: 100%;">
                    <div style="width: 30%; height:100%; background: var(--box-support-bg); border: 1px solid var(--box-support-border); border-radius: 10px;">
                        <div style="margin-bottom: 20px;">
                            <form action="">
                                <div style="display: flex; align-items: center; padding: 15px; width: 100%;">
                                    <label for="" style="width: 100%; height: 100%;">
                                        <input type="text" placeholder="Search.." style="width: 100%; height: 38px; padding: 5px; background: transparent; border: 1px solid var(--box-support-border); border-radius: 10px;">
                                    </label>
                                    <button style="display: flex; align-items: center; background: #4a82f6; border: none; margin-left: 5px; border-radius: 50%;">
                                    <span class="material-icons-round" style="width: 100%; height: auto; padding: 5px; color: #fff;">
                                        search
                                    </span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div style="width: 70%; height:100%; overflow-y: scroll;"></div>
                </div>
            </div>
        </div>
    </section>


    <?php
        include ('includes/footer.php');
    ?>
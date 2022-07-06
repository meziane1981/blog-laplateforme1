<nav class="light-blue">
    <div class="container">
        <div class="nav-wrapper">
            <a href="index.php?page=home" class="brand-logo">Blog</a>

            <a href="#" data-activates="mobile-menu" class="button-collapse"><i class="material-icons">menu</i></a>

            <ul class="right hide-on-med-and-down">
            <?php
            if(isLogged() == 1){
                ?>
                    <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                    <li class="<?php echo ($page=="articles")?"active" : ""; ?>"><a href="index.php?page=articles">Articles</a></li>
                    <li class="<?php echo ($page=="membres")?"active" : ""; ?>"><a href="index.php?page=membres">Membres</a></li>
                    <li><a href="index.php?page=logout">Déconnexion</a></li>
            <?php
            }else{
                ?>
                    <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                    <li class="<?php echo ($page=="articles")?"active" : ""; ?>"><a href="index.php?page=articles">Articles</a></li>
                    <li class="<?php echo ($page=="register")?"active" : ""; ?>"><a href="index.php?page=register">S'inscrire</a></li>
                    <li class="<?php echo ($page=="signin")?"active" : ""; ?>"><a href="index.php?page=signin">Se connecter</a></li>
                <?php
                }
            ?>
            </ul>

            <ul class="side-nav" id="mobile-menu">
            <?php
            if(isLogged() == 1){
                ?>
                    <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                    <li class="<?php echo ($page=="articles")?"active" : ""; ?>"><a href="index.php?page=articles">Articles</a></li>
                    <li class="<?php echo ($page=="membres")?"active" : ""; ?>"><a href="index.php?page=membres">Membres</a></li>
                    <li><a href="index.php?page=logout">Déconnexion</a></li>
            <?php
            }else{
                ?>
                    <li class="<?php echo ($page=="home")?"active" : ""; ?>"><a href="index.php?page=home">Accueil</a></li>
                    <li class="<?php echo ($page=="articles")?"active" : ""; ?>"><a href="index.php?page=articles">Articles</a></li>
                    <li class="<?php echo ($page=="register")?"active" : ""; ?>"><a href="index.php?page=register">S'inscrire</a></li>
                    <li class="<?php echo ($page=="signin")?"active" : ""; ?>"><a href="index.php?page=signin">Se connecter</a></li>
                <?php
                }
            ?>
            </ul>

        </div>
    </div>
</nav>
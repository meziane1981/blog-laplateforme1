<?php

    if(!isset($_GET['user']) || isLogged() == 0 || user_exist() != 1){
        header("Location:index.php?page=home");
    }

    $_SESSION['user'] = $_GET['user'];

    foreach(get_user() as $user){
        ?>
            <div class="container">
            <h2 class="header">Vous parler avec <?= $user->name; ?></h2>
            <hr/>
            
            <div class="messages-box"></div></div>

            <div align="center" class="bottom">
                <div align="left" class="field field-area">
                    <label for="message" class="field-label align-left">Votre message</label>
                    <textarea name="message" id="message" rows="2" class="field-input field-textarea"></textarea>
                </div>
                <button type="submit" id="send" class="send">
                    <span class="i-send"></span>
                </button>

            </div>
        <?php
    }
?>
<head>
    <title>Blog | <?= $user->name; ?></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

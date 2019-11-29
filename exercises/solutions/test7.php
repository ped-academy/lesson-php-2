<?php

// test7.php
// Creare un carrello virtuale con gli elementi salvati in Sessione
// Sarà possibile aggiungere nuovi elementi tramit un Input HTML e una chiamata POST

session_start();

if (empty($_SESSION['cart'])) {
    // Creo un carrello vuoto
    $_SESSION['cart'] = [];
}

if (!empty($_POST['new_item'])) {
    $_SESSION['cart'][] = $_POST['new_item'];
}

$cart = $_SESSION['cart'];

?>
<!DOCTYPE html>
<html>
<head>
    <title>Test7</title>
</head>
<body>
    <h3>Aggiungi un nuovo elemento:</h3>
    <form action="test7.php" method="POST">
        <input name="new_item" type="text" id="newItem" placeholder="Nuovo elemento">
        <input type="submit" value="Aggiungi">
    </form>

    <h3>Contenuto carrello:</h3>
    <?php if (count($cart) === 0) { ?>
        <p>Il carrello è vuoto</p>
    <?php } else { ?>
        <ul>
        <?php for ($i = 0; $i < count($cart); $i++) { ?>
            <li><?= $cart[$i] ?></li>
        <?php } ?>
        </ul>
    <?php } ?>   
</body>
</html>

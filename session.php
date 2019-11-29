<?php

session_start();

if (empty($_SESSION['cart'])) {
    // Creo un carrello vuoto
    $_SESSION['cart'] = [];
}

if (!empty($_GET['add'])) {
    $_SESSION['cart'][] = $_GET['add'];
    print_r($_SESSION['cart']);
} elseif (!empty($_GET['clear'])) {
    unset($_SESSION['cart']);
} elseif (!empty($_GET['destroy'])) {
    session_destroy();
}
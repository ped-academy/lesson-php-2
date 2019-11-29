<?php

if (empty($_COOKIE['count_visit'])) {
    echo "Benvenuto!";
    setcookie("count_visit", "1", strtotime("+1 year"));
} else {
    $count_visit = $_COOKIE['count_visit'] + 1;
    echo 'Visita numero: ' . $count_visit;
    setcookie("count_visit", $count_visit, strtotime("+1 year"));
}
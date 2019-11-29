<?php

// test6.php
// Visualizzare l'array $students con una tabella HTML e mostrare la media voti
$students = [
    ['name' => "Fabio", 'grade' => 22],
    ['name' => "Luigi", 'grade' => 30],
    ['name' => "Mario", 'grade' => 27],
];

$sum = array_sum(array_column($students, 'grade'));
$avg = round($sum / count($students), 2);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Test6</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h3>Lista Studenti:</h3>
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Voto</th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 0; $i < count($students); $i++) { ?>
                <tr>
                    <td><?= $i + 1 ?></td>
                    <td><?= $students[$i]['name'] ?></td>
                    <td><?= $students[$i]['grade'] ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <h4>Media voto: <?= $avg ?></h4>
    <p>Ultimo aggiornamento:<br><?= date('H:m d/m/Y') ?></p>
</body>
</html>

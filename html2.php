
<?php

$hours = intval(date('H'));

?>
<!DOCTYPE html>
<html>
<head>
    <title>Titolo Pagina</title>
</head>
<body>
    <?php if ($hours > 7 && $hours < 21): ?>
        <h1>Buongiorno</h1>
    <?php else: ?>
        <h1>Buonanotte</h1>
    <?php endif; ?>
</body>
</html>

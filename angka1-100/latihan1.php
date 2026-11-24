<!DOCTYPE html>
<html>
<head>
    <title>Latihan 1</title>
</head>
<body>

    <h1>Latihan 1</h1>

    <ul>
        <?php
        for ($i = 1; $i <= 100; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "<li>$i</li>";
            }
        }
        ?>
    </ul>

</body>
</html>

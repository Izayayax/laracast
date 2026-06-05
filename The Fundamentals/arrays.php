<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
        <h1>Recommended books</h1>
    <?php
        $boeken = [
            "Boek 1",
            "Boek 2",
            "Boek 3"
        ];

    ?>


    <ul>
        <?php foreach ($boeken as $book) {
            echo "<li>$book</li>";
        } ?>
    </ul>

</body>
</html> -->








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
        <h1>Recommended books</h1>
    <?php
        $boeken = [
            "Boek 1",
            "Boek 2",
            "Boek 3"
        ];

    ?>


    <ul>
        <?php foreach ($boeken as $boek) : ?>
            <li><?php echo $boek; ?></li>
        <?php endforeach; ?>
    </ul>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
        <h1>Recommended games</h1>
    <?php
        $games = [
                [
                    'name' => 'League of Legends',
                    'gamePublisherName' => 'Riot Games',
                    'website' => 'https://leagueoflegends.com'
                ],
                [
                    'name' => 'Total war: Warhammer 3',
                    'gamePublisherName' => 'Creative Assembly',
                    'website' => 'https://creativeassembly.com'
                ]
        ]
    ?>

<?php foreach ($games as $game) : ?>
    <li>
        <a href="<?= $game['website'] ?>">
          <?= $game['name']; ?>
        </a>
</li>
<?php endforeach; ?>

</body>
</html>
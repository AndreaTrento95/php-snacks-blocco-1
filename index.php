<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<h1>Snack 1</h1>

<?php 

$matches = [
    [
        'team1' => 'Gioia',
        'team2' => 'Rossi',
        'point_team_1' => 75,
        'point_team_2' => 87,
    ],
    [
        'team1' => 'Bianchi',
        'team2' => 'Blue',
        'point_team_1' => 29,
        'point_team_2' => 78,
    ],
    [
        'team1' => 'JESS',
        'team2' => 'Road',
        'point_team_1' => 90,
        'point_team_2' =>234,
    ],
    [
        'team1' => 'Norman',
        'team2' => 'Leaker',
        'point_team_1' => 90,
        'point_team_2' =>234,
    ],
];

?>

<ul>
    <?php foreach ($matches as $match) { ?>
        <li><?php echo $match['team1'] ?> - <?php echo$match['team2'] ?> | <?php  echo $match['point_team_1'] ?> - <?php  echo $match['point_team_2'] ?>
        </li>
    <?php } ?>
</ul>
<hr>

<!--------------------------------------------------------------------------------------------------------------------------------------------->


   
</body>
</html>
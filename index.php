<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>php-hotel</title>
</head>
<body>

    <table>
    <tr>
        <th>Hotel</th>
        <th>Description</th>
        <th>Parking</th>
        <th>Vote</th>
        <th>Distance to center</th>
    </tr>


    <tr>
        <?php foreach($hotels as $hotel){
            if($hotel["parking"] == true){
                $hotel["parking"] = "Yes";
            }
            else{
                $hotel["parking"] = "No";
            }

            echo "<tr>
            <td>".$hotel["name"]."</td>
            <td>".$hotel["description"]."</td>
            <td>".$hotel["parking"]."</td>
            <td>".$hotel["vote"]."</td>
            <td>".$hotel["distance_to_center"]."mt"."</td>
            </tr>";
        } ?>
    </tr>
   
    </table>
    
</body>
</html>
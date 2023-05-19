<?php
    $hotels = [
        'pippo' =>[
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>hotel php</title>
</head>
<body>
    <h1>HOTEL</h1>
    <form action="index.php" method="GET">
        <h3>parcheggio:</h3>
        <select name="parcheggio" id="">
            <option ></option>
            <option >si</option>
            <option >no</option>
        </select>
        <button type="submit">cerca</button>
    </form>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">nome</th>
                <th scope="col">descrizione</th>
                <th scope="col">parking</th>
                <th scope="col">voto</th>
                <th scope="col">distanza</th>
            </tr>
        </thead>
        <tbody>
            <?php
                if ($_GET['parcheggio'] == '') {
                    foreach ($hotels as $element => $mario) {    
                            echo "<tr>"
                            . "<td>" . $mario['name'] . "</td>"
                            . "<td>" . $mario['description'] . "</td>"
                            . "<td>" . ($mario['parking'] == FALSE ? " " : "<i class='fa-solid fa-square-parking' style='color: #49b941;'></i>") . "</td>"
                            . "<td>" . $mario['vote'] . "</td>"
                            . "<td>" . $mario['distance_to_center'] . " km" . "</td>"
                            ."</tr>";                    
                        }
                }
                elseif ($_GET['parcheggio'] == 'si') {
                    foreach ($hotels as $element => $mario) {    
                        if (in_array($mario['parking'], $hotels)) {
                            echo "<tr>"
                            . "<td>" . $mario['name'] . "</td>"
                            . "<td>" . $mario['description'] . "</td>"
                            . "<td>" . ($mario['parking'] == FALSE ? " " : "<i class='fa-solid fa-square-parking' style='color: #49b941;'></i>") . "</td>"
                            . "<td>" . $mario['vote'] . "</td>"
                            . "<td>" . $mario['distance_to_center'] . " km" . "</td>"
                            ."</tr>";                    
                            }
                        }
                }
                elseif ($_GET['parcheggio'] == 'no') {
                    foreach ($hotels as $element => $mario) {    
                        if (in_array($mario['parking']==FALSE, $hotels)) {
                            echo "<tr>"
                            . "<td>" . $mario['name'] . "</td>"
                            . "<td>" . $mario['description'] . "</td>"
                            . "<td>" . ($mario['parking'] == FALSE ? " " : "<i class='fa-solid fa-square-parking' style='color: #49b941;'></i>") . "</td>"
                            . "<td>" . $mario['vote'] . "</td>"
                            . "<td>" . $mario['distance_to_center'] . " km" . "</td>"
                            ."</tr>";                    
                            }
                        }
                }
                
            ?>
        <!-- echo "<tr>"
        . "<td>" . $mario['name'] . "</td>"
        . "<td>" . $mario['description'] . "</td>"
        . "<td>" . ($mario['parking'] == FALSE ? " " : "<i class='fa-solid fa-square-parking' style='color: #49b941;'></i>") . "</td>"
        . "<td>" . $mario['vote'] . "</td>"
        . "<td>" . $mario['distance_to_center'] . " km" . "</td>"
        ."</tr>";  -->

        </tr>
        </tbody>
    </table>
    
    
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>
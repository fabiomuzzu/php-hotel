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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Hotels</title>
</head>
<body>
    
<!-- INCLUDE DELL'HEADER -->
<?php include __DIR__."/partials/header.php";?>

<!-- MAIN -->
<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Hotels List</h1>
            </div>
            <div class="col-12">
                <form action="./index.php" method="GET">
                    
    
                </form>
            </div>
            <div class="col-12">
                <table class="table table-bordered border-dark">
                    <thead class="text-center">
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Descrizione</th>
                            <th scope="col">Parcheggio</th>
                            <th scope="col">Voto</th>
                            <th scope="col">Distanza dal centro</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <!-- ciclo foreach per ciclare tutti gli elementi dell'array hotels-->
                        <?php foreach ($hotels as $hotel) { ?>
                            <tr>
                                <!-- utilizzo di echo per stampare a schermo i valori dell'array -->
                                <th scope="row"><?php echo $hotel['name']?></th>
                                <td><?php echo $hotel['description']?></td>
                                <td><?php echo $hotel['parking'] == true ? 'Si' : 'No'?></td>
                                <td><?php echo $hotel['vote']?></td>
                                <td><?php echo $hotel['distance_to_center']?></td>
                            </tr>
                        <?php }?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>

<!-- INCLUDE DEL FOOTER -->
<?php include __DIR__."/partials/footer.php";?>

</body>
</html>
<?php
    @include __DIR__. '/partials/vars.php';

    $filtered_hotels = $hotels;
    // verifico se è in entrata una varbiabile get
    // se il valore di parcheggio è diverso da stringa vuota eseguo le condizoni all'interno dell'if
    if(isset($_GET['parcheggio']) && $_GET['parcheggio'] != ''){
        // variabile che conteine temporaneamente gli hotel
        $tempHotels = [];

        // creo la variabile parking dal dato di parcheggio
        $parking = $_GET['parcheggio'];

        // ciclo tutti gli elementi dell'array hotels
        foreach($filtered_hotels as $hotel){
            // se il valore contenuto nell'array di hotels è uguale al valore della variabile parking impostata nel filtro inserisco nell'array temporaneo l'elemento hotel
            if($hotel['parking'] == $parking){
                $tempHotels [] = $hotel;
            }
        }
        // Se si verificano le condizioni precedenti la variabile filtered hotels sarà uguale a temphotels creata nell'if e non più a tutto l'array hotels
        $filtered_hotels = $tempHotels;
    }
    
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
            <form action="./index.php" method="GET">
                <div class="row">
                    <div class="col-3">
                        <div class="form-group">
                            <select name="parcheggio" id="parcheggio" class="form-control">
                                <option value="">Filtra per disponibilità parcheggio...</option>
                                <option value="1">Parcheggio disponibile</option>
                                <option value="0">Parcheggio non disponibile</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-3">
                        <button type="submit" class="btn bmtn-s btn-primary">Filtra</button>
                    </div>
                </div>
            </form>
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
                        <?php foreach ($filtered_hotels as $hotel) { ?>
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
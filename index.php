
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>PHP Hotel</title>
</head>
<body>

<div class="container">

  <h1 class="text-center my-5 ">Hotel Results</h1>
  
  <table class="table">
    <thead>
      <tr>
        <th scope="col">HOTEL NAME</th>
        <th scope="col">DESCRIPTION</th>
        <th scope="col">PARKING</th>
        <th scope="col">VOTE</th>
        <th scope="col">DISTANCE TO CENTER</th>
      </tr>
    </thead>
    <tbody>

      <?php foreach($hotels as $hotel): ?>
      <tr>
        <th scope="row"><?php echo $hotel['name'] ?></th>
        <td><?php echo $hotel['description'] ?></td>
        <td><?php echo $yesNo = $hotel['parking'] ? 'yes' : 'no' ?></td>
        <td><?php echo $hotel['vote']  ?></td>
        <td><?php echo $hotel['distance_to_center'] ?></td>
      </tr>


      <?php endforeach; ?>
      
    </tbody>
  </table>

</div>


  
</body>
</html>
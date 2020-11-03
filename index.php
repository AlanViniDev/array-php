<?php
/*
$vetorOne[2] = [1,2,3];
$vetorTwo[2] = [4,5,6];
$vetorThree[2] = [7,8,9];
*/

$vetorOne = array(
    1,2,3
);

$vetorTwo = array(
    4,5,6
);

$vetorThree = array(
    7,8,9
);

$vetorFor = array(
    10,11,12
);


$countOne = count($vetorOne);
$countTwo = count($vetorTwo);
$countThree = count($vetorThree);
$countvetorFor = count($vetorFor);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <button onclick = "display();">Show</button>
    <script>
        function display(){
            document.querySelector("#show").style.display = "block";
        }
    </script>
<table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">Vetor</th>
      <th scope="col">One</th>
      <th scope="col">Two</th>
      <th scope="col">Three</th>
    </tr>
  </thead>
  <tbody>
    <tr style = "display:none;" id = "show">
    <?php
    for($i = 0; $i <= 0; $i++){
        echo "<th scope = 'row'>$vetorOne[$i]</th>";
    }
    for($i = 0; $i <= 0; $i++){
        echo "<td scope = 'row'>$vetorTwo[$i]</td>";
    }
    for($i = 0; $i <= 0; $i++){
        echo "<td scope = 'row'>$vetorThree[$i]</td>";
    }
    for($i = 0; $i <= 0; $i++){
        echo "<td scope = 'row'>$vetorFor[$i]</td>";
    }
    ?>
    </tr>
    <tr>
    <?php
    for($i = 1; $i <= 1; $i++){
        echo "<th scope = 'row'>$vetorOne[$i]</th>";
    }
    for($i = 1; $i <= 1; $i++){
        echo "<td scope = 'row'>$vetorTwo[$i]</td>";
    }
    for($i = 1; $i <= 1; $i++){
        echo "<td scope = 'row'>$vetorThree[$i]</td>";
    }
    for($i = 1; $i <= 1; $i++){
        echo "<td scope = 'row'>$vetorFor[$i]</td>";
    }
    ?>
    </tr>
    <tr>
    <?php
    for($i = 2; $i <= 2; $i++){
        echo "<th scope = 'row'>$vetorOne[$i]</th>";
    }
    for($i = 2; $i <= 2; $i++){
        echo "<td scope = 'row'>$vetorTwo[$i]</td>";
    }
    for($i = 2; $i <= 2; $i++){
        echo "<td scope = 'row'>$vetorThree[$i]</td>";
    }
    for($i = 2; $i <= 2; $i++){
        echo "<td scope = 'row'>$vetorFor[$i]</td>";
    }
    ?>
    </tr>
  </tbody>
</table>
</body>
</html>
<?php

$ingredients = [
    "Chedar Cheese",
    "Mozzarella Cheese",
    "Bread",
    "Butter",
    "Pepper"

];

    //RECIPE FROM: https://natashaskitchen.com/grilled-cheese-sandwich/

$steps = [

    "Butter the toast – spread 1/2 Tbsp butter on one side of each slice of bread.",
    "Heat skillet – place a skillet over low to medium/low heat. A griddle should be at 275˚F. Immediately add 2 slices of bread with the butter-side-down.",
    "Add cheese – stack cheeses on one of the pieces of bread, cover with the other piece of toast and flip the sandwich over.",
    "Brown the toast – Continue sauteeing, flipping once, until both sides are golden brown and cheese is melted.",
    "Serve – cut the sandwich in half on the diagonal to serve."
];

$title = "GRILLED CHEESE SANDWICH";


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title><?=$title?></title>
</head>
<body>
    
  <header class="my-5">

    <h1 class="text-center display-2"><?=$title?></h1>

  </header>  

  <main class="mx-4 d-flex justify-content-center" >


    <section>
    <h2 class="text-center">Ingredients</h2>
    <ul>
    <?php foreach ($ingredients as $ingredient): ?>
    
        <li> <?= $ingredient?>  </li>

    <?php endforeach ?>    
    </ul>
    </section>

    <section>
    <h2 class="text-center">Steps</h2>

    <ol class="mx-5">

        <?php foreach ($steps as $step):?>
            
            <li><?=  $step ?> </li>
            
        <?php endforeach ?>

    </ol>
    </section>
  </main>

</body>
</html>
<?php

include_once __DIR__ . '/db/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        

    <title>Pet Shop</title>
</head>
<body>

<header>
    <h1 class="d-flex justify-content-center align-item-center p-5 fw-bold fs-1">
        Pet shop e-commerse
    </h1>
</header>

<main>
    <div class="container">
        <div class="wrapper d-flex flex-wrap justify-content-between">

            <?php foreach ($toys as $toy) { ?>
                <div class="card mb-5" style="width: 25rem;">
                    <img src="<?php echo $toy->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fs-2"><?php echo $toy->name ?></h5>
                        <p class="card-text"><?php echo $toy->price ?> &euro;</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Category: <?php echo $toy->category->category ?></li>
                        <li class="list-group-item">Brand: <?php echo $toy->brand ?></li>
                        <li class="list-group-item">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Product Description
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <?php echo $toy->description ?></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Product Info
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="info">
                                            <li>Material: <?php echo $toy->material ?></li>
                                            <li>Colour: <?php echo $toy->colour ?></li>
                                            <li>Per Size: <?php echo $toy->petSize ?></li>
                                        </ul>
                                    
                                    
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            <?php } ?>
            

            <?php foreach ($foods as $food) { ?>
                <div class="card mb-5" style="width: 25rem;">
                    <img src="<?php echo $food->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $food->name ?></h5>
                        <p class="card-text"><?php echo $food->price ?> &euro;</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Category: <?php echo $food->category->category ?></li>
                        <li class="list-group-item">Brand: <?php echo $food->brand ?></li>
                        <li class="list-group-item">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Product Description
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <?php echo $food->description ?></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Product Info
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="info">
                                            <li>Material: <?php echo $food->ingredients ?></li>
                                            <li>Colour: <?php echo $food->calories ?></li>
                                            <li>Per Size: <?php echo $food->allergens ?></li>
                                        </ul>
                                    
                                    
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            <?php } ?>
            
            

            <?php foreach ($petHouses as $petHouse) { ?>
                <div class="card mb-5" style="width: 25rem;">
                    <img src="<?php echo $petHouse->image ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $petHouse->name ?></h5>
                        <p class="card-text"><?php echo $petHouse->price ?> &euro;</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Category: <?php echo $petHouse->category->category ?></li>
                        <li class="list-group-item">Brand: <?php echo $petHouse->brand ?></li>
                        <li class="list-group-item">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                    Product Description
                                </button>
                                </h2>
                                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <?php echo $petHouse->description ?></div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    Product Info
                                </button>
                                </h2>
                                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <ul class="info">
                                            <li>Material: <?php echo $petHouse->dimension ?></li>
                                            <li>Colour: <?php echo $petHouse->style ?></li>
                                        </ul>
                                    
                                    
                                    </div>
                                </div>
                            </div>
                            
                            </div>
                        </li>
                    </ul>
                    <div class="card-body">
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            <?php } ?>
            
            
        </div>
    </div>
</main>

</body>
</html>
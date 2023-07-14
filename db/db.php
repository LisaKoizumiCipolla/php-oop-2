<?php

include_once __DIR__ . '/../classes/toy.php';
include_once __DIR__ . '/../classes/food.php';
include_once __DIR__ . '/../classes/petHouse.php';



$toys = [
    new Toy([new Category ('dog')], 'Nina Ottosson', 'Outward Hound', '18.58€', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Plastic', 'Purple', 'All sizes'),
    new Toy([new Category ('dog'), new Category ('cat')], 'Peluchino carino' , 'Trudy', '299.99€', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Real fur', 'Rainbow', 'All sizes'),
    new Toy([new Category ('cat')],'Serpente a sonagli realistico robot' , 'Outward Hound', '1800€', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Adamantium', 'Red', 'All sizes'),
];


$foods = [
    new Food([new Category ('cat')], 'Purrrito', 'Cat Food', '12€', '', '', 'Catnip', '300Kcal/ 100g', 'Shellfish' ),
    new Food([new Category ('dog'), new Category ('dog')], 'Food for all', 'Food', '32€', '', '', 'Human flesh', '2500Kcal/ 100g', 'Nuts' ),
    new Food([new Category ('dog')], 'Meat and greet', 'Dog Food', '2€', '', '', 'Misterious meat', '30Kcal/ 100g', ' - ' ),
];

$petHouses = [
    new PetHouse([new Category ('cat')], 'Mordenkainen\'s marvelous mansion', 'WotC', '500 gc', '', '', 'Portable', 'Perfect'),
    new PetHouse([new Category ('dog')], 'The House ', 'Netflix', '200000€', '', '', 'Set', 'Rigid' ),
    new PetHouse([new Category ('cat'), new Category ('dog')], 'Plushie bed', 'Stay Fluffy', '500€', '', '', 'Portable', 'Flu8ffy' ),
];


?>
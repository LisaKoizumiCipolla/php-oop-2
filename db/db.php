<?php

include_once __DIR__ . '/../classes/toy.php';
include_once __DIR__ . '/../classes/food.php';
include_once __DIR__ . '/../classes/petHouse.php';
include_once __DIR__ . '/../classes/category.php';

$dogCategory = new Category('Dog');
$catCategory = new Category('Cat');

$toys = [
    new Toy($dogCategory, 'Nina Ottosson', 'Outward Hound', '18.58', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Plastic', 'Purple', 'All sizes'),
    new Toy($catCategory , 'Peluchino carino' , 'Trudy', '299.99', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Real fur', 'Rainbow', 'All sizes'),
    new Toy($catCategory,'Serpente a sonagli realistico robot' , 'Outward Hound', '1800', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Adamantium', 'Red', 'All sizes'),
];


$foods = [
    new Food($catCategory, 'Purrrito', 'Cat Food', '12', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Catnip', '300Kcal/ 100g', 'Shellfish' ),
    new Food($dogCategory, 'Food for all', 'Food', '32', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Human flesh', '2500Kcal/ 100g', 'Nuts' ),
    new Food($dogCategory, 'Meat and greet', 'Dog Food', '2', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Misterious meat', '30Kcal/ 100g', ' - ' ),
];

$petHouses = [
    new PetHouse($catCategory, 'Mordenkainen\'s marvelous mansion', 'WotC', '500', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Portable', 'Perfect'),
    new PetHouse($dogCategory, 'The House ', 'Netflix', '200000', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Set', 'Rigid' ),
    new PetHouse($catCategory, 'Plushie bed', 'Stay Fluffy', '500', 'lorLorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur et dicta illum facere nobis harum molestias inventore dolorem, sapiente adipisci, obcaecati necessitatibus tenetur aliquid. Repudiandae dolorem impedit ipsum molestiae nobis!em', 'https://source.unsplash.com/random/400x400?sig='.rand(100,200), 'Portable', 'Fluffy' ),
];


?>
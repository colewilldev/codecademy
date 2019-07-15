<?php

<?php
namespace Codecademy;

$my_car = [
  "oil" => "black and clumpy",
  "brakes" => "new",
  "tires" => "old with worn treads",
  "filth" => "bird droppings", 
  "wiper fluid" => "full", 
  "headlights" => "bright"
];
print_r($my_car);

// Write your code below:

$my_car["oil"] = 'new and premium';
$my_car["tires"]='new with deep treads';
unset($my_car["filth"]);
print_r($my_car);

<?php
namespace Codecademy;

// Write your code below:
$hybrid_array = [1,2,3,4];

$hybrid_array[8]="five more";

array_push($hybrid_array, rand());

print_r($hybrid_array);

echo $hybrid_array[9];

<?php
namespace Codecademy;

$giraffe_foods = ["dip"=>"guacamole", "chips"=>"corn", "entree"=>"grilled chicken"];

$impala_foods = ["dessert"=>"cookies", "vegetable"=>"asparagus", "side"=>"mashed potatoes"];

$rat_foods = ["dip"=>"mashed earth worms", "entree"=>"trash pizza", "dessert"=>"sugar cubes", "drink"=>"lemon water"];

// Write your code below:

$potluck = $giraffe_foods + $impala_foods+ $rat_foods + $rat_foods;

// Repeated Keys ARE NOT added again... nice

print_r($potluck);

<?php
namespace Codecademy;
$doge_meme = ["top_text" => "Such Python", "bottom_text" => "Very language. Wow.", "img" => "very-cute-dog.jpg", "description" => "An adorable doge looks confused."];

$bad_meme = ["top_text" => "i don't know", "bottom_text" => "i can't think of anything", "img" => "very-fat-cat.jpg", "description" => "A very fat cat looks happy."];

// Write your code below:

function createMeme($meme) {
  $meme = [];
  $meme['top_text'] = 'Much PHP';
  $meme['bottom_text'] = "Very programming. Wow.";
  return $meme;
}

$php_doge = createMeme($doge_meme);
print_r($php_doge);

function fixMeme(&$meme){
  $meme["top_text"] ="voo";
  $meme["bottom_text"]="poo";
  return $meme;
}

fixMeme($bad_meme);




<?php

//Build the navigation bar
function getNavList($classifications)
{
   $navList = '<ul>';
   $navList .= "<li><a href='/frankies' title='Frankie's Farm Home Page'>Home</a></li>";
   foreach ($classifications as $classification) {
      $navList .= "<li><a href='/frankies/animals?action=classification&classification_type="
         . urlencode($classification['classification_type']) .
         "' title='View our $classification[classification_type]'>$classification[classification_type]</a></li>";
   }
   $navList .= '</ul>';
   return $navList;
}


//build display of animals
function buildAnimalDisplay($animals){
   $adv = '<ul id="animal-display">';
   foreach ($animals as $animal){
      $adv.= "<li><a href='../animals?action=information&animal_id=". urlencode($animal['animal_id']) . "'>";
      $adv .= "<h2>$animal[animal_type] - $animal[animal_subtype]</h2>";
      $adv .= "<p>$animal[animal_name]</p>";
      $adv .= "</a></li>";
   }
   return $adv;
}

function buildDetailDisplay($animal){
   $dd = '<div id="animalDisplay">';
   $dd .= "<h1>$animal[animal_type] $animal[animal_subtype]</h1>"; 
   $dd .= "<h2>$animal[animal_name]</h2>";
   $dd .= "<span><img src='$animal[img_path]' alt='Image of $animal[animal_name]'></span>";
   $dd .= "<section><h3>Description</h3></section>";
   $dd .= "<p>$animal[animal_notes]</p>";

   return $dd;
}

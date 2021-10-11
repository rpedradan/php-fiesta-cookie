<?php

# Create a multidimensional array named YourTeamName.
$TeamCoders = array
	('ID'=>array(1,2,3,4,5,6,7,8,9,10), 
	'SPECIES'=>array('Bulbasaur', 'Ivysaur','Venusaur','Charmander','Charmelion','Charizard','Squirtle','Wartortle','Blastoise', 'Caterpie'), 
	'TYPE 1'=>array('Grass','Grass','Grass','Fire','Fire','Fire','Water','Water','Water','Water', 'Bug'), 
	'TYPE 2'=>array('Poison','Poison','Poison','N/A','N/A','N/A','Flying','N/A','N/A','N/A', 'N/A'), 
	'Ability'=>array('Overgrow','Overgrow','Overgrow','Blaze','Blaze','Blaze','Torrent','Torrent','Torrent','Shield'."\n".'Dust'), 
	'HP'=> array(45,60,80,39,58,78,44,59,79,50), 
	'ATTACK'=>array(49,62,82,52,64,84,48,63,83,20), 
	'DEFENSE'=>array(49,63,83,43,58,78,65,80,100,55)
);
# Print the array
	echo '<pre>';
	print_r($TeamCoders);

# Echo the number of elements in an array.
	echo count($TeamCoders);

# Declare variable $favorite and assign your favorite specie (use array notation).	
	$favorite = $TeamCoders['SPECIES'][9];
	echo $favorite;

# Using foreach display all the species in a list.
	$species = ['Bulbasaur','Ivysaur','Venusaur','Charmander','Charmeleon','Charizard','Squirtle','Wartortle', 'Blastoise', 'Caterpie'];
	foreach ($species as $specie){
	echo $specie;
	echo '<br>';
}
/*
SOURCES:

Traversy Media. (2017, February 27). PHP Front To Back [Part 3] - Variables, Constants & Data Types [Video]. YouTube. https://www.youtube.com/watch?v=0Dp7Lt7iT3A&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=3

Traversy Media. (2017, February 27). PHP Front To Back [Part 4] - Arrays [Video]. YouTube. https://www.youtube.com/watch?v=9p9siksrSoU&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=5
*/

?>




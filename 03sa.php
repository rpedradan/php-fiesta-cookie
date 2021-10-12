<?php
	$TeamCoders = array('Bulbasaur'=>49,'Ivysaur'=>63,'Venusaur'=>83,'Charmander'=>43,'Charmeleon'=>58,'Charizard'=>78,'Squirtle'=>65,'Wartortle'=>80,'Blastoise'=>100,'Caterpie'=>55);

function pokemon_defense($TeamCoders,$limit_number){
	foreach ($TeamCoders as $pokemon => $pokemon_def){
		if ($pokemon_def >= $limit_number){
			echo $pokemon, '<br>';
		}
	}
}
pokemon_defense($TeamCoders, 60);

/*
 SOURCES:

Traversy Media. (2017, February 27). PHP Front To Back [Part 3] - Variables, Constants & Data Types [Video]. YouTube. https://www.youtube.com/watch?v=0Dp7Lt7iT3A&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=3

Traversy Media. (2017, February 27). PHP Front To Back [Part 4] - Arrays [Video]. YouTube. https://www.youtube.com/watch?v=9p9siksrSoU&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=5

Traversy Media. (2017, March 01). PHP Front To Back [Part 7] - Conditionals & Comparison [Video]. YouTube. https://www.youtube.com/watch?v=9p9siksrSoU&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=5

*/
?>
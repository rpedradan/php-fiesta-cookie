<?php
# hp_sum will return the sum of the column hp
	$hp_sum = [45,60,80,39,58,78,44,59,79,50];
	echo 'hp sum: ';
	echo array_sum($hp_sum);
	echo '<br>';

# ave_attack will return the average of column attack
	$ave_attack = [49,62,82,52,64,84,48,63,83,20];
	echo 'average attack: ';
	echo array_sum($ave_attack)/count($ave_attack);

/*
 SOURCES:

Traversy Media. (2017, February 27). PHP Front To Back [Part 3] - Variables, Constants & Data Types [Video]. YouTube. https://www.youtube.com/watch?v=0Dp7Lt7iT3A&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=3

Traversy Media. (2017, February 27). PHP Front To Back [Part 4] - Arrays [Video]. YouTube. https://www.youtube.com/watch?v=9p9siksrSoU&list=PLillGF-Rfqbap2IB6ZS4BBBcYPagAjpjn&index=5

W3Schools. PHP Array Functions [Web]. Website. https://www.w3schools.com/php/php_ref_array.asp

*/

?>
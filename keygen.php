<?php
function key_gen($length){
	//Key array Start here================================
	$keygen=array(
				array("A","B","C","D","E","F","G","H","I","J"),
				array("K","L","M","N","O","P","Q","R","S","T"),
				array("U","V","W","X","y","Z","a","b","c","d"),
				array("e","f","g","h","i","j","k","l","m","n"),
				array("o","p","q","r","s","t","u","v","w","x"),
				array("y","z","$","%","#","~","(",")","[","]"),
				array("&","^","@","+","_","!","=","[","]","?"),
				array("0","1","2","3","4","5","6","7","8","9")
			);
	//Key array End here==================================

	//Generating Key Start here===========================
	$number=array();
	for ($i=0; $i<$length; $i++) { 
		$number[]=rand(0,9);
	}
	$key=array();
	foreach ($number as $value) {
		$rang=rand(0,7);
		$key[]=$keygen[$rang][$value];
	}
	$final_key=implode("",$key);
	return $final_key;

	//Generating Key End here=============================
}
?>
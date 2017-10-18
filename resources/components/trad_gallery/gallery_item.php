<?php

try {
	$dbh = new PDO("mysql:host=localhost;dbname=erica_galleries", "root", "");
} catch(PDOException $e){
	print("Could not connect to database\n");
	print("getMessage(): ".$e->getMessage()."\n");
}


$digiq = $dbh->prepare("SELECT image_path FROM image_gallery WHERE gallery_type = 'trad'");
$digiq->execute();

$result = $digiq->fetchAll();


foreach(array_reverse($result) as $row){
	$imgpath = $row["image_path"];

	echo '<div class="item"><a href="'.$imgpath.'" data-lightbox="digital" data-title=""><img class="img-fluid img-thumbnail" src="'.$imgpath.'" alt= ""/></a></div>';

}


	


?>
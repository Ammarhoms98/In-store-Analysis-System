<?php


function vedget()
{
	if(require("cone.php"))
	{
	$req=$access->query("SELECT  * FROM videos ");
    $req->execute();
    $data = $req->fetchAll(PDO::FETCH_OBJ);   
        return $data;
        $req->closeCursor();
	}
}

//print_r(vedget()) ;





?>
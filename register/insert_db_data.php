<?php

include("../Class/db_regis.php");

$ID      			= $_POST["ID"];
$Name_lastname   	= $_POST["Name_lastname"];
$Faculty   	 		= $_POST["Faculty"];
$Branch    			= $_POST["Branch"];



 $n = new db_regis();
 $n->addregis($ID,$Name_lastname,$Faculty, $Branch );
 $n->Redirect("register.php");
 
/* 
*/ 
        



?>

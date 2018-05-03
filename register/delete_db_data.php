<?php

include("../Class/db_regis.php");

$ID = $_POST["button"];





 $n = new db_regis();
 $n->deleteregis($ID);
 $n->Redirect("register.php");


/*
echo $ID;
*/

?>
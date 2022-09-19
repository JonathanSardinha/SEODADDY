<?php

if(isset($_POST['domain']))
{
require("DomainAgeclass.php");
$w=new DomainAge();
echo $w->age($_POST['domain']);
}
?>
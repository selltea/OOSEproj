<?php
require_once('../../Models/Category-model.php');
require_once('../../Models/SingleTon.php');

$Name = $_POST['Name'];
$ParentId = $_POST['ParentId'];
$ItemId=$_POST['ItemId'];
Category::create($Name, $ParentId,$ItemId);
Category::itemcategory($ItemId);


?>
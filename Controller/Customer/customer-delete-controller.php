<?php
require_once('../../Models/customer-model.php');
require_once('../../Models/SingleTon.php');
     $Id = $_POST['Id'];
    $customer = new customer($Id);
    $customer->delete();
?>
<?php
include_once("FileMaker.php");
class Pdf implements Maker
{
    private $invoice;
    private $invoiced;
    public function __construct($invoice,$invoiced)
    {
        $this->invoice=$invoice;
        $this->invoiced=$invoiced;

    }
    public function print($filename)
    {
          
         echo"InvoiceTotal:".$this->invoice->Total."\n";
         echo"Item:".$this->invoiced->ItemId."\n"."Q:".$this->invoiced->Quantity."\n"."Total:".$this->invoiced->Total."\n";
    }
   

}

?>
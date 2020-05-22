<?php


abstract class Printer
{
    public function toPrint()
    {
        return "Printing... original";
    }
}

class HPPrinter extends Printer
{
    public function toPrint()
    {
        return "Printing in HP....";
    }
}

class Epson extends Printer
{
    public function toPrint()
    {
        return "Pring in Epson";
    }

    /*
    public function toPrint($papel) // PHP não permite
    {
        return $papel . " teste papel";
    }
    */
}

$print = new Epson();
print $print->toPrint();
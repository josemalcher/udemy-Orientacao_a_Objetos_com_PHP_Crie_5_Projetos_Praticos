<?php

use CodeException\Sum;


require __DIR__ . "/vendor/autoload.php";

try {
    $sum = new Sum();
    print $sum->doSum(10, 20);

}/* catch (\Error $e) {
    print_r($e->getTrace());
}*/ catch (\CodeException\MyExceptions\MyCustomException $e) {
    print $e->getMessage();
}





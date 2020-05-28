<?php

use CodeException\Sum;

return __DIR__ . "/vendor/autoload.php";

try {
    $sum = new Sum();
    print $sum->doSum(10);

}catch (\Error $e){
    print_r($e->getTrace());
}




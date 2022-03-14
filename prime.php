<?php

    function primeNumber($number) {
        for($i = 2; $i < $number; $i++) {
            if($number % $i == 0) {
                return $i;
            }
        }
        return 0;
    }

    $userNumber = 68;
    $prime = primeNumber($userNumber);

    if($prime > 0) {
        echo $userNumber." is not a prime number, divided by ".$prime;
    } else {
        echo $userNumber." is a prime number.";
    }

?>
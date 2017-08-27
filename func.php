<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 27.08.2017
 * Time: 14:14
 */

function fibonachi($n)
{
    if ($n < 2) {
        return 1;
    } else {
        return fibonachi($n - 1) + fibonachi($n - 2);
    }


}

for ($n = 0; $n <= 10; $n++) {
    echo fibonachi($n) . '<br>';
}

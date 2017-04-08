<?php

function fib ($n) { // a function called fib, declaire variable n (the sequence number)
    if($n==0) return 0;
    if ($n < 3) { return 1; } // if n is smaller than 3 return n (1 or 2)
    else { return fib ($n - 1) + fib ($n - 2); }
}

        echo fib(50);
?>
<?php

    preg_replace_callback('/ /', function() {
        static $i;
        print ++$i."\n";
    }, str_repeat(' ', 1000));

?>
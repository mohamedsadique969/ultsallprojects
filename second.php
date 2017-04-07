<?php
$a=12;
 $b=35.99999;
  $c="baabtra";
   $d=true;
$m=(int) $a;
$n=(int) $b;
$o=(int) $c;
$p=(int) $d;
    echo "before conversion to int"."<br>";
   echo var_dump($a);
   echo var_dump($b);
   echo var_dump($c);
   echo var_dump($d);
   echo "after conversion to int"."<br>";
   echo var_dump($m);
   echo var_dump($n);
   echo var_dump($o);
   echo var_dump($p);

   echo "before conversion to string"."<br>";
    echo var_dump($a);
   echo var_dump($b);
   echo var_dump($c);
   echo var_dump($d);
   $i=(string) $a;
   $j=(string) $b;
   $k=(string) $c;
   $l=(string) $d;

 echo "after conversion to string"."<br>";
   echo var_dump($i);
   echo var_dump($j);
   echo var_dump($k);
   echo var_dump($l);
echo "before conversion to boolean"."<br>";
   echo var_dump($a);
   echo var_dump($b);
   echo var_dump($c);
   echo var_dump($d);
   $e=(boolean) $a;
   $f=(boolean) $b;
   $g=(boolean) $c;
   $h=(boolean) $d;
    echo "after conversion to boolean"."<br>";
   echo var_dump($e);
    echo var_dump($f);
     echo var_dump($g);
      echo var_dump($h);

 
?>
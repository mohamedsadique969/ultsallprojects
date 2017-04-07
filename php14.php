<?php 

$raj = array('name'=>"raj",'age'=>15,'totm'=>85);
$ram = array('name'=>"ram",'age'=>15,'totm'=>95);
$rahul = array('name'=>"rahul",'age'=>15,'totm'=>75);
//print_r($raj)."<br>".print_r($ram)."<br>".print_r($rahul);
$a=array($raj,$ram,$rahul);
foreach ($a as $key => $row) {
    $totm[$key]  = $row['totm'];
    
}


array_multisort($totm, SORT_ASC, $a);
print_r($a);


//output:
//Array ( [0] => Array ( [name] => rahul [age] => 15 [totm] => 75 ) [1] => Array ( [name] => raj [age] => 15 [totm] => 85 ) [2] => Array ( [name] => ram [age] => 15 [totm] => 95 ) )
 ?>
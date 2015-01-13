<?php
 //multidimensional array//
 $a=array(array(1,2,3),array(5,6,7,8));
 foreach($a as $array)
 {
 foreach($array as $item)
 {
 echo"$item";
 }
 echo"<br>";
 }
 ?>	
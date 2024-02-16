<?php

$map = function($func, $array){
  // $newArray = [];
  // for($i=0; $i<count($array); $i++){
  // $newArray[] = $func($array[$i]);
  // }
  // print_r($newArray);

  $result = array_reduce($array, function($carry,$item) use ($func){
    $carry[] = $func($item);
    return $carry;
  },[]);

  print_r($result);
};

$map(fn($x) => $x*2 ,[1,2,3]);

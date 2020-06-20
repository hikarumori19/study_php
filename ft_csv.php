<?php
  $lines = file('ft.csv');

  foreach($lines as $line){
    $data = explode(',',$line);
    $cnt = count($data);
    echo $cnt;
  }
?>

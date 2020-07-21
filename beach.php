<?php
  $lines = fopen('OMIASHI_BEACHSC.csv','r');
  for ($cnt = 0; fgetcsv($lines); $cnt++);
  echo $cnt;
?>

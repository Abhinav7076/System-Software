#!/usr/bin/php
<?php
$a = array();
$a=$argv;
$f=0;
$arrlength = count($argv);
function customError($errno, $errstr) {
  echo "Error: [$errno] $errstr \n";
  echo "Ending Script";
  die();
}
set_error_handler("customError",E_USER_ERROR);
for ($x = 1; $x < $arrlength; $x++) {
$y=$x+1;
$test=is_numeric($argv[$x]);
if ($test==false) {
  trigger_error("Value must be an integer at arguement number ".$y,E_USER_ERROR);
  $f=1; 
} 
} 
if($f!=1){
sort($argv);

$k=$a[1];
echo $argv[$k];
}
?>


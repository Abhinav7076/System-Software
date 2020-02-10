#!/usr/bin/php
<?php
$arrlength = count($argv);
function customError($errno, $errstr) {
  echo "Error: [$errno] $errstr \n";
  //echo "Ending Script";
  die();
}
set_error_handler("customError",E_USER_ERROR);
if($argc>1){
$d=0;
for($x = 1; $x < $arrlength; $x++) {
    $test=is_numeric($argv[$x]);
    if ($test==true)
    	$d=$d+1;
}
if($d==0){
for($x = 1; $x < $arrlength; $x++) {
    $argv[$x]=strtolower($argv[$x]);
}
array_shift($argv);
$m=array();
$m=$argv;
$l=count($argv);
for($i=0;$i<count($argv);$i++){
	$j=$i;
	$temp=$argv[$i];
	for($k=0;$k<count($argv);$k++){
		if($j!=$k){
			if($temp==$argv[$k]){
				$argv[$k]="";
				$l=$l-1;
			}
		}
	}
}
$i=0;
$arr=array();
for($x=0;$x<count($argv);$x++){
	if($argv[$x]!=""){
		$arr[$i]=$argv[$x];
		$i=$i+1;
	}
}
sort($arr);
$c=0;
for($x=0;$x<count($arr);$x++) {
	for($y=0;$y<count($m);$y++){
     	if($arr[$x]==$m[$y]){
     		$c=$c+1;
     	}
     }
     echo "Frequency of ".$arr[$x]." is ".$c."\n";
     $c=0;
}
}
else{
	trigger_error("Arguments must be words not numbers",E_USER_ERROR);
}
}
else{
	trigger_error("Arguments must be greater than 1",E_USER_ERROR);
}
?>


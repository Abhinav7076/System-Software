#!/usr/bin/php
<?php
function customError($errno, $errstr) {
  echo "Error: [$errno] $errstr \n";
  //echo "Ending Script";
  die();
}
set_error_handler("customError",E_USER_ERROR);
if($argc==3){
if(strlen($argv[1])>=strlen($argv[2])){
echo substr_count($argv[1],$argv[2])."\n";
$last_Pos = 0;
$positions = array();

while (($last_Pos = strpos($argv[1], $argv[2], $last_Pos))!== false) {
    $positions[] = $last_Pos;
    $last_Pos = $last_Pos + strlen($argv[2]);
}

// Displays 3 and 10
foreach ($positions as $value) {
    echo $value ."\n";
}
}
else{
	trigger_error("Length of x is greater than y",E_USER_ERROR);
}
}
else{
	trigger_error("Arguments should be 3",E_USER_ERROR);
}


?>

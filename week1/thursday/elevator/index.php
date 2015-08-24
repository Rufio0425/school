<?php 

$e_dir ='down';
$e_floor = 5;
$p_dir = 'down';
$p_floor = 6;

if($e_dir != $p_dir){
	$msg = 'dont pick me up';
}else {
	if($e_floor == $p_floor){
		$msg = 'pick me up';
	}	elseif($e_floor < $p_floor){
		$msg = 'pick me up';
			if($p_dir == 'up'){
				$msg = 'pickup';
			}else {
				$msg = 'dont pickup';
			}
	} 	elseif($e_floor > $p_floor){
		$msg = 'dont pick me up';
			if($e_dir == 'down'){
				$msg = 'pickup';
			}else {
				$msg = 'dont pickup';
			}
	}


}

echo $msg;

?>
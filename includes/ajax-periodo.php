<?php  
	session_start();
	unset($_SESSION['teste']);
	$_SESSION['teste'] = '<span style="font-weight: 500"> Período: '.$_POST['start'].' a '.$_POST['end'].'</span>';
	echo $_SESSION['teste'];
?>
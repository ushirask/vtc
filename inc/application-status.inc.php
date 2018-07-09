<?php 
$db=mysqli_connect('localhost', 'root', '', 'vtc');
$sql_state="SELECT * FROM metadata WHERE name='applications'";
$result_state = mysqli_query($db,$sql_state);
	while($row_state = mysqli_fetch_array($result_state,MYSQLI_ASSOC)){
		$info=$row_state['info'];
		if($info==='closed'){
			session_start();
			$_SESSION['error']="Sorry. Applications are closed. Please contact the institute for more information";
			header('location:status.html');
		}
	}	
?>
<?php 
  $login = strtolower($_POST['login']);
  $radio = strtolower($_POST['optradio']);
  $nomeAco = strtolower($_POST['nmAcompanhante']);
  $idAco = $_POST['idAcompanhante'];
  $nomeAcoMaior = strtolower($_POST['nmAcompanhanteMaior']);
  
  $nomeAco = substr_replace($nomeAco, '', -2);
  $idAco = substr_replace($idAco, '', -2);
  $nomeAcoMaior = substr_replace($nomeAcoMaior, '', -2);

  
  $servername = "localhost";
  $database = "id6927386_loris";
  $username = "id6927386_wagner";
  $password = "wagner";
  // Create connection
	if($radio == "sim"){
		$conn = mysqli_connect($servername, $username, $password, $database);
		
		$sql ="update convidados set confirm = '$radio', nmAco = '$nomeAco', idAco = '$idAco', nmAcoAdut = '$nomeAcoMaior' where nome = '$login'";
		$resultado = mysqli_query($conn, $sql);
		
		mysqli_close($conn);
			echo"<script language='javascript' type='text/javascript'>alert('Que bom que confirmou :), contamos com voce!');window.location.href='index.php';</script>";
			die();
		}else{
			
			$conn = mysqli_connect($servername, $username, $password, $database);
		
			$sql ="update convidados set confirm = '$radio', nmAco = null, idAco = null where nome = '$login'";
			$resultado = mysqli_query($conn, $sql);
			
			mysqli_close($conn);
			echo"<script language='javascript' type='text/javascript'>alert('Que pena não poder comparecer, mesmo assim obrigado. :)');window.location.href='index.php';</script>";
			die();
		}
	
?>
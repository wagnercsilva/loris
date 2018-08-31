<?php 
  $login = strtolower($_POST['login']);
  
  $servername = "localhost";
  $database = "id6927386_loris";
  $username = "id6927386_wagner";
  $password = "wagner";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  
    $sql ="insert into convidados (nome, confirm, nmAco, idAco) VALUES ('$login','nao',null,null)";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
        
	$conn->close();
	echo"<script language='javascript' type='text/javascript'>localStorage.setItem('nome', '$login');window.location.href='confirm.php';</script>";
  
?>
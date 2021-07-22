<?php      
    include('connection.php');  
	include('Index.html');
    $username = $_POST['userEmail'];  
    $password = $_POST['userPass'];   
      
    $sql = "select * from users where email = '$username' and password = '$password'";  
    $sqlResult = mysqli_query($connection, $sql);  
    $sqlRow = mysqli_fetch_array($sqlResult, MYSQLI_ASSOC);  
    $check = mysqli_num_rows($sqlResult);  
          
        if($check == 1){  
			header('Location: Search.html');
		}
		else{
			$_SESSION['message'] = 'Error!';
			header('Location:MASI.html');
		}
?>  
    <?php  
    include('connection.php');   
	include('signUp.html');

    if(isset($_POST['submit'])){

        if(!empty($_POST['newEmail']) && !empty($_POST['newPass']) && !empty($_POST['confirmPass']))

        $newEmail = $_POST['newEmail'];
        $newPass = $_POST['newPass'];
        $conPass = $_POST['confirmPass'];

        $signUpQ = "insert into users (email, password) values ('$newEmail' , '$newPass')";
        $qRun = mysqli_query($connection, $qRun) or die (mysqli_error());

        if ($qRun){
            header('Location: Search.html');
        }
        else {
            $_SESSION['message'] = 'Error!';
			header('Location:MASI.html');
        }

    }
    else{
        echo "All fields required"
    }
?>
 
<?php
require_once "config.php";
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

	//validasiusername
	if(empty(trim($_POST["username"]))){
		$username_err = "Masukan Username";
	}else{
		$sql = "SELECT id FROM users WHERE username = ?";
	if($stmt = mysqli_prepare($link, $sql)){
		mysqli_stmt_bind_param($stmt,"s",$param_username);
		$param_username = trim($_POST["username"]);
			if(mysqli_stmt_execute($stmt)){
				mysqli_stmt_store_result($stmt);
			if(mysqli_stmt_num_rows($stmt) == 1){
				$username_err = "Nama Telah Dipakai";
			}else{
				$username = trim($_POST["username"]);
			}
			}else{
				echo "Terjadi Kesalahan, Coba Lagi";
			}
			mysqli_stmt_close($stmt);
		}
	}
	//validasipassword
	if(empty(trim($_POST["password"]))){
		$password_err = "Masukan Password";
	} elseif(strlen(trim($_POST["password"])) < 8){
		$password_err = "Password Harus Kurang Dari 8 Karakter";
	}else{
		$password = trim($_POST["password"]);
	}

	//Falidasi Password
	if(empty(trim($_POST["confirm_password"]))){
		$confirm_password_err = "Konfirmasi Password";
	} else{
		$confirm_password = trim($_POST["confirm_password"]);
		if(empty($password_err) && ($password != $confirm_password)){
			$confirm_password_err = "Password Tidak Cocok";
		}
	}
	//cek error
	if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
		$sql = "INSERT INTO users (username, password) VALUES(?, ?)";
		if ($stmt = mysqli_prepare($link, $sql)) {
			mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);
		//setparameter
		$param_username = $username;
		$param_password = password_hash($password, PASSWORD_DEFAULT);
		//buatpassword
		if(mysqli_stmt_execute($stmt)){
			header("location: login.php");
		}else{
			echo "Terjadi Kesalahan, Coba Lagi";
		}
		mysqli_stmt_close($stmt);
		}
	}
	mysqli_close($link);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, initial-scale-1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
    <title>Sign Up || Daftar</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <link rel="stylesheet" a href="css/bootstrap.min.css.map">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>
</head>
<body style="background:#7E7E7E;">
	<div class="wrapper">
	<div class="container">
	<div class="row">
        <h2>Daftar</h2>
        <p></p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                <label>Username</label>
                <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                <span class="help-block"><?php echo $username_err; ?></span>
            </div>    
            <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                <label>Password</label>
                <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                <span class="help-block"><?php echo $password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Konfirmasi Password</label>
                <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-default" value="Reset">
            </div>
            <p>Sudah Punya Akun? <a href="login.php">Masuk disini</a>.</p>
        </form>
    </div>    
</body>
</html>
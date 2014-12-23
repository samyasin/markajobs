<?php
require '../includes/userModel.php';
// check user
if(isset($_POST['submit'])){    
    if(isset($_POST['email']) && isset($_POST['pass'])){
        $username = $_POST['email'];
        $password = $_POST['pass'];
        $userModel = new user();
        $check = $userModel->Auth($username, $password);
        if($check){
            session_start();
            $_SESSION['user_id'] = $check;
            header("location:index.php");
        }else{
            $errors = "Check your username or password";
        }
    }else{
        $errors = "username & password Required";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="eshbeata">
    <link rel="shortcut icon" href="images/favicon.png">

    <title>Login</title>

    <!--Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">    

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body class="login-body">
	<div class="container">
		<form class="form-signin" action="" method="POST">
			<h2 class="form-signin-heading">sign in now</h2>
			<div class="login-wrap">
				<div class="user-login-info">
                                    <?php if (isset($errors)): ?>
                                        <p><?php echo $errors; ?></p>
                                    <?php endif; ?>
                                    <input type="text" class="form-control" name="email" placeholder="Email" autofocus>
					<input type="password" class="form-control" name="pass" placeholder="Password">
				</div>          
                            <button class="btn btn-lg btn-login btn-block" type="submit" name="submit">Sign in</button>
			</div>
		</form>
	</div>
	<!-- Placed js at the end of the document so the pages load faster -->
	<!--Core js-->
	<script src="/public/js/lib/jquery.js"></script>
	<script src="/public/bs3/js/bootstrap.min.js"></script>
</body>
</html>

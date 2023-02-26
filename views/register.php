<?php 

    session_start();

    require_once "connection.php";

    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $user_check = "SELECT * FROM user WHERE username = '$username' LIMIT 1";
        $result = mysqli_query($conn, $user_check);
        $user = mysqli_fetch_assoc($result);

        if ($user['username'] === $username) {
            echo "<script>alert('Username already exists');</script>";
        } else {
            $passwordenc = md5($password);

            $query = "INSERT INTO user (username, password, firstname, lastname, userlevel)
                        VALUE ('$username', '$passwordenc', '$firstname', '$lastname', 'm')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                $_SESSION['success'] = "Insert user successfully";
                header("Location: index.php");
            } else {
                $_SESSION['error'] = "Something went wrong";
                header("Location: register.php");
            }
        }

    }


?>


<link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
	

</head>
<body>
<body class="img js-fullheight" style="background-image: url(bg.jpg);">
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
                <div class="form-group">
					<h2 class="heading-section">Login page</h2>
                </div>
				</div>
			</div>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div class="form-group">
        <input type="text" class="form-control" name="username" placeholder="Enter your username" required>
        <br>
        </div>
        
        <input type="password" class="form-control" name="password" placeholder="Enter your password" required>
        <br>
 
        <input type="text" class="form-control" name="firstname" placeholder="Enter your firstname" required>
        <br>

        <input type="text" class="form-control" name="lastname" placeholder="Enter your lastname" required>
        <br>
        <input type="submit" class="form-control btn btn-primary submit px-3" name="submit" value="login">
    
    </form>
    <div class="col-md-6 text-center mb-5"></div>
    <h3><p class ="w-100 text-center"><a href="index.php">Go to login</a></p></h3>
    
   
</body>

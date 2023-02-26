
<?php 

    session_start();

    if (isset($_POST['username'])) {

        include('connection.php');

        $username = $_POST['username'];
        $password = $_POST['password'];
        $passwordenc = md5($password);

        $query = "SELECT * FROM user WHERE username = '$username' AND password = '$passwordenc'";

        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {

            $row = mysqli_fetch_array($result);

            $_SESSION['userid'] = $row['id'];
            $_SESSION['user'] = $row['firstname'] . " " . $row['lastname'];
            $_SESSION['userlevel'] = $row['userlevel'];
            
        
            if ($_SESSION['userlevel'] == 'a') {
                header("Location: home.php");
            }

            if ($_SESSION['userlevel'] == 'm') {
                header("Location: home.php");
            }
        } else {
                echo "<script type='text/javascript'>alert('User ຫຼື Password ບໍ່ຖືກຕ້ອງ');
                window.location='index.php';
                </script>";
        }
    }

?>

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
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="success">
            <?php 
                echo $_SESSION['success'];
            ?>
        </div>
    <?php endif; ?>


    <?php if (isset($_SESSION['error'])) : ?>
        <div class="error">
            <?php 
                echo $_SESSION['error'];
            ?>
        </div>
    <?php endif; ?>

    <link rel = "stylesheet" type = "text/css" href = "css/bootstrap.css" />
    <form action="index.php" method="post">
    
        
        <input type="text" class="form-control" name="username" placeholder="Username" required>
        
        <br>

        <input type="password"class="form-control" name="password" placeholder="Password" required>
        
        <br>
    
        <input type="submit" class="form-control btn btn-primary submit px-3" name="submit" value="Login">

    </form>

    <div class="col-md-6 text-center mb-5"></div>
    <h3><p class ="w-100 text-center"><a href="register.php">Go to register</a></p></h3>
    
    
</body>


<?php 

    if (isset($_SESSION['success']) || isset($_SESSION['error'])) {
        session_destroy();
    }

?>
<?php
if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
{
	#if (($_POST['name'] != $user) ||($_POST['password'] !=($pass)))
	#{
		header('location: login.php');
	#}
	#else
	#{
		#echo 'welcome back'.$_COOKIE['username'];
	#}
}

?>




<?php 
if(isset($_POST["submit"]))
{
$name=trim($_POST["name"]);
$pass=$_POST["password"];
define('DB_HOST','localhost');
define('DB_NAME','harshit');
define('DB_USER','root');
define('DB_PASSWORD','');



$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("failed to connect to MYSQL:" . mysql_error());
$db=mysqli_select_db($conn,DB_NAME) or die("failed to connect to MYSQL: " . mysqli_error());
if(mysqli_connect_errno($conn))
{
	echo "failed to connect to MYSQL: ". mysqli_connect_error();
}
else
{

	$query=mysqli_query($conn,"SELECT * FROM users WHERE name='".$name."' AND password='".$pass."'");  
    $count = mysqli_num_rows($query);
    echo $count;
    if($count>0)  
    {  
    	$data=mysqli_fetch_array($query,MYSQLI_ASSOC);
    	print_r($data);
    	echo 'sucess';
    	setcookie('username', $_POST['name'], time()+10);
    	setcookie('password', $_POST['password'], time()+10);
    	header("Location: login.php");
	}
	else
	{
		echo "wrong id or password";
	}
}
if(empty($name)||empty($pass))
{
	echo "form is empty";
}


}
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Website</title>
    
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!-- ------------------navigation---------------------  -->
	<nav class="navbar navbar-default navbar-fixed-top navbar-inverse navbar-inherit">
    	<div class="container">
    	<!-- Brand and toggle get grouped for better mobile display -->
      		<div class="navbar-header">
        		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          			<span class="sr-only">Toggle navigation</span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
          			<span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#">Grocery</a>
      		</div>

    	<!-- Collect the nav links, forms, and other content for toggling -->
      		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      
        		<ul class="nav navbar-nav navbar-right">
          			<li class="nav-item" ><a href="#" data-toggle="modal" data-target="#login-modal" >Login</a></li>
          			<li><a href="#" data-toggle="modal" data-target="#register-modal">Signup</a></li>
          			<li><a href="#" >About</a></li>
        		</ul>
      		</div><!-- /.navbar-collapse -->
    	</div><!-- /.container -->
  	</nav>
    <!-- ------------------end navigation---------------------  -->
  <!-- ------------------carousel---------------------------  -->
    <div class="col-lg-12  col-md-12 col-sm-12 col-xs-12" style="margin-top: 51px; padding-left: 0px; padding-right: 0px;">
      	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      	<!-- Indicators -->
        	<ol class="carousel-indicators">
          		<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          		<li data-target="#carousel-example-generic" data-slide-to="1"></li>
          		<li data-target="#carousel-example-generic" data-slide-to="2"></li>
        	</ol>

      	<!-- Wrapper for slides -->
        	<div class="carousel-inner" role="listbox">
          		<div class="item active">
            		<img  src="http://www.canadasbeststorefixtures.com/wp-content/uploads/DSC_0313.jpg" alt="First slide" style="width: 100%; height: 550px;">
          		</div>
          	<div class="item">
            	<img  src="http://www.canadasbeststorefixtures.com/wp-content/uploads/100_2424.jpg" alt="Second slide" style="width: 100%; height: 550px;">
          	</div>
          	<div class="item" >
            	<img src="http://www.canadasbeststorefixtures.com/wp-content/uploads/DSC_0313.jpg" alt="Third slide" style="width: 100%; height: 550px;">
          	</div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
    </div>
<!-- ---------------end carousel-------------------------  -->

<!-- ---------------login model-------------------------  -->
	<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
        	<div class="loginmodal-container">
          		<h1>Login to Your Account</h1><br>
          		<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
          		<div class="form-group">
              		<label for="username" class="cols-sm-2 control-label" >Username</label>
              			<div class="cols-sm-10">
                			<div class="input-group">
                  				<span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                  				<input type="text" class="form-control" name="name" id="username"  placeholder="Enter your Username"/>
                			</div>
              			</div>
            	</div>
				<div class="form-group">
              		<label for="password" class="cols-sm-2 control-label">Password</label>
              		<div class="cols-sm-10">
                		<div class="input-group">
                  			<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  			<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                		</div>
              		</div>
            	</div>
          		<div class="form-group ">
              		<button class="btn btn-primary btn-lg btn-block login-button" type="submit" name="submit">Login</button>
            	</div>
          		</form>
          
          		<div class="login-help">
          			<a href="#">Register</a> - <a href="#">Forgot Password</a>
          		</div>
        	</div>
      	</div>
    </div>
<!-- ---------------end login model-------------------------  -->

<!-- ---------------registration model-------------------------  -->
	<div class="modal fade" id="register-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
          	<div class="loginmodal-container">
          	<div class="main-login main-center">
          		<form class="form-horizontal" method="post" action="#">
            		<h1>Register to Your Account</h1><br>
            		<div class="form-group">
              			<label for="name" class="cols-sm-2 control-label">Your Name</label>
              				<div class="cols-sm-10">
                				<div class="input-group">
                  					<span class="input-group-addon"><i class="fa fa-user fa-lg" aria-hidden="true"></i></span>
                  					<input type="text" class="form-control" name="name" id="name"  placeholder="Enter your Name"/>
                				</div>
              				</div>
            		</div>

            		<div class="form-group">
              		<label for="email" class="cols-sm-2 control-label">Your Email</label>
              			<div class="cols-sm-10">
                			<div class="input-group">
                  				<span class="input-group-addon"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
                  				<input type="text" class="form-control" name="email" id="email"  placeholder="Enter your Email"/>
                			</div>
              			</div>
            		</div>

 		        	<div class="form-group">
              		<label for="username" class="cols-sm-2 control-label">Username</label>
              			<div class="cols-sm-10">
                			<div class="input-group">
                  				<span class="input-group-addon"><i class="fa fa-users" aria-hidden="true"></i></span>
                  				<input type="text" class="form-control" name="username" id="username"  placeholder="Enter your Username"/>
                			</div>
              			</div>
            		</div>

            		<div class="form-group">
              		<label for="password" class="cols-sm-2 control-label">Password</label>
              			<div class="cols-sm-10">
                			<div class="input-group">
                  				<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                  				<input type="password" class="form-control" name="password" id="password"  placeholder="Enter your Password"/>
                			</div>
              			</div>
            		</div>
            		<div class="form-group ">
              			<button type="submit" class="btn btn-primary btn-lg btn-block login-button" name="register">Register</button>
            		</div>
            		<div class="login-register">
                    	<a href="index.php">Login</a>
                 	</div>
          		</form>
        	</div>
        </div>
    	</div>
	</div>
<!-- ---------------end registration model-------------------------  -->

<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>



<?php 
if(isset($_POST["register"]))
{
$name=trim($_POST["name"]);
$pass=$_POST["password"];
$uname=$_POST["username"];
$email=$_POST["email"];
define('DB_HOST','localhost');
define('DB_NAME','harshit');
define('DB_USER','root');
define('DB_PASSWORD','');

$conn=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("failed to connect to MYSQL:" . mysql_error());
$db=mysqli_select_db($conn,DB_NAME) or die("failed to connect to MYSQL: " . mysqli_error());
if(mysqli_connect_errno($conn))
{
	echo "failed to connect to MYSQL: ". mysqli_connect_error();
}
else
{
	$query1="INSERT INTO users(name,username,password,email) VALUES('".$_POST["name"]."','".$_POST["username"]."','".$_POST["password"]."','".$_POST["email"]."')";

	$query=mysqli_query($conn,$query1);  
	echo "sucess";
    
}


}
?>




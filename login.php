<!DOCTYPE html>
<?php session_start() ;?>
<html>

<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login Form Using HTML And CSS Only</title>
	<style>
		@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

		* {
			box-sizing: border-box;
		}

		.custom-body-container {
			background: #f3e0e2;
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			font-family: 'Montserrat', sans-serif;
			height: 100vh;
		}

		.custom-body-container h1 {
			font-weight: bold;
			margin: 0;
		}

		.custom-body-container p {
			font-size: 14px;
			font-weight: 100;
			line-height: 20px;
			letter-spacing: 0.5px;
			margin: 20px 0 30px;
		}

		.custom-body-container span {
			font-size: 12px;
		}

		.custom-body-container a {
			color: #333;
			font-size: 14px;
			text-decoration: none;
			margin: 15px 0;
		}

		.custom-body-container button {
			border-radius: 20px;
			border: 1px solid #FF4B2B;
			background-color: #FF4B2B;
			color: #FFFFFF;
			font-size: 12px;
			font-weight: bold;
			padding: 12px 45px;
			letter-spacing: 1px;
			text-transform: uppercase;
			transition: transform 80ms ease-in;
		}

		.custom-body-container form {
			background-color: #FFFFFF;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 50px;
			height: 100%;
			text-align: center;
		}

		.custom-mcontainer {
			background-color: #fff;
			border-radius: 10px;
			box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
			position: relative;
			overflow: hidden;
			width: 768px;
			max-width: 100%;
			min-height: 480px;
		}

		.custom-form-container {
			position: absolute;
			top: 0;
			height: 100%;
		}

		.custom-log-in-container {
			left: 0;
			width: 50%;
			z-index: 2;
		}

		.custom-overlay-container {
			position: absolute;
			top: 0;
			left: 50%;
			width: 50%;
			height: 100%;
		}

		.custom-overlay {
			background: #FF416C;
			background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
			background: linear-gradient(to right, #FF4B2B, #FF416C);
			background-repeat: no-repeat;
			background-size: cover;
			background-position: 0 0;
			color: #FFFFFF;
			position: relative;
			left: -100%;
			height: 100%;
			width: 200%;
		}

		.custom-overlay-panel {
			position: absolute;
			display: flex;
			align-items: center;
			justify-content: center;
			flex-direction: column;
			padding: 0 40px;
			text-align: center;
			top: 0;
			height: 100%;
			width: 50%;
		}

		.custom-overlay-right {
			right: 0;
		}

		.custom-social-container {
			margin: 50px 0;
		}

		.custom-social-container a {
			border: 1px solid #DDDDDD;
			border-radius: 50%;
			display: inline-flex;
			justify-content: center;
			align-items: center;
			margin: 0 5px;
			height: 40px;
			width: 40px;
		}

		input {
			padding: 10px;
			background-color: antiquewhite;
			border: none;
			border-radius: 10px;
			margin: 10px 0px;
		}
	</style>
</head>

<body>
	<?php include('navbar.php') ?>
	<div style="display:flex; width:100%; flex-direction:row;justify-content:space-around" class="custom-body-container">

		<div>
			<img src="image/login.webp" alt="">
		</div>
		<div class="custom-mcontainer" id="container">
			<div class="custom-form-container custom-log-in-container">
				<form action="php/qlogin.php" method="POST">
					<h2>Login</h2>
					<span>or use your account</span>
					<input type="email" name="email" placeholder="Email" />
					<input type="password" name="password" placeholder="Password" />
					<a href="#">Forgot your password?</a>
					<div style="margin:10px 0px;"> Don't Have an Account?<a style="text-decoration:none; font-weight:bold;color:blue;" href="signup.php">Sign up</a></div>
					<button name="submit" value="submit">Log In</button>
				</form>
			</div>
			<div class="custom-overlay-container">
				<div class="custom-overlay">
					<div class="custom-overlay-panel custom-overlay-right">
						<h2>Welcome!Back</h2>
						<p>Prakriti cloths Store</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<head>
  <script type="text/javascript">
    function showMessage(message, className) {
      var messageElement = document.createElement('div');
      messageElement.className = className;
      messageElement.innerText = message;
      document.body.appendChild(messageElement);
      setTimeout(function() {
        messageElement.remove();
      }, 2000);
    }
  </script>
  <style type="text/css">
    .success-message {
      background-color: green;
      color: #fff;
      padding: 20px;
      position: absolute;
      margin: auto;
      top: 60px;
      right: 20px;
      text-align: center;
      font-size: 24px;
      font-weight: bolder;
      border-radius: 10px;
    }

    .error-message {
      background-color:red;
      color: white;
      padding: 20px;
      margin-bottom: 150px;
      text-align: center;
      font-size: 24px;
      font-weight: bolder;
      position: absolute;
      border-radius:10px;
      margin: auto;
      top: 60px;
      right: 20px;
    }
  </style>
</head>

<body>


    <?php if (isset($_SESSION['error'])) { ?>
        <script type="text/javascript">
            showMessage('<?php echo $_SESSION['error']; ?>', 'error-message');
            <?php unset($_SESSION['error']);
         ?>
        </script>
    <?php } ?> 
</body>

</html>

</body>

</html>
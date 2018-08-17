<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; display: block; margin-left: auto; margin-right: auto}
        .help-block{color: red;}
        .alerti{color: #BA0101;}
    </style>
</head>
<body>
	<div class="container-fluid" style="background-image: url('/Taleas/images/bg-01.jpg'); background-position: center; background-repeat: no-repeat;background-size: cover;width: 100%;height: 100%;">
	    <div class="wrapper">
	    	<fieldset>
				<legend>Login</legend>
	        <h2>Login</h2>
	        <p>Ju lutem vendosni emailin dhe passwordin</p>
	        <form action="" method="post">
	        	<div>
	        		<span class="help-block" style="color: #BA0101;"><!-- <b><?php echo $general_err; ?> --></b></span>
	        		<input type="button" style="display: none;" class="btn btn-default" value="Aktivizo" onclick="location.href='ifNotConfirmed.php'" id="aktivizo">
	        	</div>
	            <div class="form-group">
	                <label>Email</label>
	                <input type="text" name="email" class="form-control" autocomplete="off" required="on" oninvalid="this.setCustomValidity('Nuk mund te lihet bosh')" oninput="this.setCustomValidity('')" >
	                <span class="help-block" class="alerti"><b><!-- <?php echo $email_err; ?> --></b></span>
	            </div>    
	            <div class="form-group">
	                <label>Password</label>
	                <input type="password" name="password" class="form-control" required="on" oninvalid="this.setCustomValidity('Nuk mund te lihet bosh')" oninput="this.setCustomValidity('')">
	                <span class="help-block" class="alerti"><b><!-- <?php echo $password_err; ?> --></b></span>
	            </div>
	            <div class="form-group">
	                <input type="submit" class="btn btn-warning" value="Login">
	            </div>
	            <p>Nuk ke nje llogari? <a href="signupForm.php" style="color: #BA0101;"><b>Rregjistrohu tani</b></a>.</p>
	        </form>
	    </fieldset>
	</div>
</body>
</html>
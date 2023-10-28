<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In Form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     <form action="sign_in.php" method="post">
     	<h2>Sign In</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>Username</label>
     	<input type="text" name="username" placeholder="Enter Username Here"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Enter Password Here"><br>

     	<button type="submit">Sign In</button>
          <a href="sign_up.php" class="ca">CREATE AN ACCOUNT!</a>
     </form>
</body>
</html>
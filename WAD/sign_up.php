<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- for custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

<a href="#" class="logo"><strong>Tutor</strong>Ed. </a>

    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="index.php">About</a>
        <a href="index.php">Key Features</a>
        <a href="index.php">Tutors</a>
        <a href="index.php">Book A Session</a>
        <a href="index.php">Review</a>
        <a href="contact.php">Contact Us</a>
        <a href="sign_up.php">Sign Up</a>
        <a href="sign_in.php">Sign In</a>
    </nav>

    <div id="menu-btn" class="fas fa-bars"></div>

</header>

<!-- header section ends -->

<!--sign up form begins-->
<section class="sign_up" id="sign_up"> 
     <form action="sign_up_check.php" method="post">
     	<h2>Sign Up</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <label>Name</label>
          <?php if (isset($_GET['name'])) { ?>
               <input type="text" 
                      name="name" 
                      placeholder="Enter Name Here"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="Enter Name Here"><br>
          <?php }?>

          <label>Username</label>
          <?php if (isset($_GET['username'])) { ?>
               <input type="text" 
                      name="username" 
                      placeholder="Enter Username Here"
                      value="<?php echo $_GET['username']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="username" 
                      placeholder="Enter Username Here"><br>
          <?php }?>


     	<label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Enter Password Here"><br>

          <label>Repeat Password</label>
          <input type="password" 
                 name="repeat_password" 
                 placeholder="Repeat Password Here"><br>

     	<button type="submit">Sign Up</button>
          <a href="index.php" class="ca">ALREADY HAVE AN ACCOUNT?</a>
     </form>
</section>
<!--sign up form ends-->

</body>
</html>
<?php include 'header.php' ?>
<link rel="stylesheet" href="./css/new.css">
	<marquee behavior="alternate"  direction="left" >
       <h2 class="scroll"> EASY ELECTRICIAN</h2>
    </marquee> 
<div
      style="min-height: 100vh">
	  <img src="./img/animation.gif" height="260px" width="450px" style="margin-left: 30%;">
	<div class="interface">
      	<form class="border shadow p-3 rounded" 
      	      style="width: 450px;">
      	      <h1 class="text-center p-3">LOGIN</h1
		<div class="mb-3">
		  <button  type="submit" class="btn btn-primary btn-outline-info mr-5 " ><a href="Adminlogin.php">Admin</button>
		  <button type="submit" class="btn btn-primary  btn-outline-info mr-5"><a href="CLogin.php">Customer</button>
		  <button type="submit" class="btn btn-primary  btn-outline-info"><a href="ELogin.php">Electrician</button>
		</div>
		</form>
    </div>
<?php include 'footer.php' ?>
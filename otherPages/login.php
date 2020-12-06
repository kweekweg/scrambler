<?php
  $nav_selected = "LIST";
  $left_buttons = "NO";
  $left_selected = "";

  include("../includes/innerNav.php");
  
  if(session_id() == '' || !isset($_SESSION)){
		session_start();
	}
 ?>

 <div class="right-content">
    <div class="container">
      <?php if(!isset($_GET['status'])) {?>
      <h3 style = "color: #01B0F1;">Login</h3>
      <br>
      <div class="container">
        <form method='post' name="login" action="loggingin.php">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" value="admin" name="uname" required>
        <br><br>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" value="abc123" name="psw" required>
        <br><br>
        <button type="submit">Login</button>
        </form>
        
      </div>
      <?php } else if (isset($_GET['status']) && $_GET['status'] == 'loggedin') {?>
        
      <h3 style = "color: red;">Logged in successfully</h3>
      <?php header("refresh: 1; url=../index.php"); }
       else if (isset($_GET['status']) && $_GET['status'] == 'notloggedin') {?>
        
        <h3 style = "color: red;">Incorrect username or password</h3>
        <?php header("refresh: 1; url=../index.php"); }?>
    </div>
</div>

<?php include("../includes/footer.php"); ?>

<!DOCTYPE html>
<html>
  <head>
    <title>MCS-Login</title>
  </head>
  <body>
    <link href="style.css" rel="stylesheet" type="text/css">
    <div id="output-text">
      <div class="top-container">
  <h1>MCStats-Login</h1>
  <p>Login with your username and password!</p>
</div>
   </div> 
       <script src="header.js"></script>
        <script src="ham.js"></script>
        <script src="font.js"></script>
      <form action="login.php" method="post">
        <h2>LOGIN</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <label>User Name</label>
<input type="text" name="uname" placeholder="User Name">
        <br>
        <label>Password</label>
<input type="password" name="password" placeholder="Password">
        <br> 
        <input type="submit" value="Enter"/>
     </form>
      <!-- menu -->
      <div id="menu">
      <div id="menu-bar" onclick="menuOnClick()">
      <div id="bar1" class="bar"></div>
      <div id="bar2" class="bar"></div>
      <div id="bar3" class="bar"></div>
    </div>
    <nav class="nav" id="nav">
      <ul>
        <li><a href="index.html">Home</a></li>
        <li><a href="stats.html">Stats</a></li>
        <li><a href="feedback.html">Feedback</a></li>
        <li><a href="about.html">About Us</a></li>
      </ul>
    </nav>
  </div>
  <div class="menu-bg" id="menu-bg"></div>
  <div class="content">
  </div>
  </div>
  </body>
</html>
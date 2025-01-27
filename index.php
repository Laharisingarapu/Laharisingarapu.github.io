<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="signstyles.css">
    <script src="validate.js"></script>
</head>
<body>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <p id="error-message"></p>
  <form class="modal-content" action="insert.php" method="post" >
    <div class="container">
      <h1>Sign Up</h1>
      
      <p>Please fill in this form to create an account.</p>
      <hr>
      
        <label for="fullname"><b>Name</b></label>
        <input type="text" placeholder="Enter Fullname" id="fullname" name="fullname" required>
        <span id="fullnameError" class="error"></span>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" id="email" name="email" required>
      <span id="emailError" class="error"></span>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" id="password" name="password" required>
      <span id="passwordError" class="error" ></span>
      

      <label for="psw"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm-password" id="confirm-password" name="confirm-password" required>


      <p>Already have an account? <a href="login.html" style="color:dodgerblue">Login</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn">Sign Up</button>
      </div>
    </form>
    </div>
  </form>
</div>
<script src="sign.js"></script>

<nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Menu</a></li>
      <li><a href="#">Cart</a></li>
      <li><a href="#">Payment</a></li>
      <li><a href="#">Feedback</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
    <button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><a href="login.html">Login</a></button>
  </nav>

</body>
</html>

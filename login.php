<?php require 'include/header.php'; ?>

<div class="loginBx">

</div>
<div class="lcontainer">
  <input id="lregister_toggle" type="checkbox">
  <div class="lslider">
    <form class="lform" action = "login_act.php" method = "POST">
      <span class="ltitle">Login</span>
      <div class="lform_control">
        <input required="" name = "email" class="linput" type="email" value="<?php if(isset($_COOKIE['email'])){ echo $_COOKIE['email'];} ?>">
        <label class="llabel">Email</label>
      </div>
      <div class="lform_control">
        <input required="" name = "password" class="linput" type="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];} ?>">
        <label class="llabel">Password</label>
      </div>
      <button type="submit">Login</button>
      <div>
        <input type="checkbox" name="remember">
        <label class="text-white fs-5">Remember Me<label>
      </div>

      <span class="lbottom_text">Don't have an account? <a href="./register.php">Register</a>
    </form>

  </div>
</div>

<br>
<br>
<br>
<br>
<br>
<br>



<?php require 'include/footer.php'; ?>
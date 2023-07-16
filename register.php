<?php require 'include/header.php'; ?>

<div class="registerBx">

</div>
  <div class="lcontainer">
    <input id="lregister_toggle" type="checkbox">
    <div class="lslider">
      <form class="lform" method = "POST" action = "register_act.php">
        <span class="ltitle">Sign Up</span>
        <div class="lform_control">
          <input required="" name = "full_name" class="linput" type="text">
          <label class="llabel">Full Name</label>
        </div>
        <div class="lform_control">
          <input required="" name = "email" class="linput" type="email">
          <label class="llabel">Email</label>
        </div>
        <div class="lform_control">
          <input required="" name = "password" class="linput" type="password">
          <label class="llabel">Password</label>
        </div>
        <button type = "submit" name = "submit"> Sign Up</button>

        <span class="lbottom_text">Already have an account? <a href="./login.php">Login</a>
        </span>
      </form>


    </div>
  </div>

  <br>
  <br>
  <br>
  <br>






<?php require 'include/footer.php'; ?>
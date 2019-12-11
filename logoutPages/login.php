<script language="javascript" >
  function validate_log(){
    if(loginForm.email.value=="") {
      alert("Enter Email");
      loginForm.email.focus()
      return false;
    }
    else if(loginForm.password.value=="") {
      alert("Enter Password");
      loginForm.password.focus()
      return false;
    }
  }
</script>

<div class="modal-dialog modal-sm">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <h4 class="modal-title text-center form-title">Login</h4>
    </div>

    <div class="modal-body padtrbl">
      <?php
        if(isset($_GET["msg"])) {
          echo "<p class=error>" . $_GET["msg"] . "</p>";
          unset ($_GET["msg"]);
      }?>

      <div class="login-box-body">
        <div class="form-group">
          <form id="loginForm" name="loginForm" action="logoutPages/verify_login.php" method="post" onSubmit="return validate_log()" >

            <input class="form-control" id="loginid" type="email" name="email" placeholder="Email"> <br>
            <input class="form-control" name="password" placeholder="Password" id="loginpsw" type="password"> <br>
            <input class="btn btn-green btn-block btn-flat" type="submit" name="submit" value="Submit">
          </form>
        </div>
      </div>
      <p>Don't have an account? <a href="index.php?page=register">Sign up now</a>.</p>
    </div>
  </div>
</div>
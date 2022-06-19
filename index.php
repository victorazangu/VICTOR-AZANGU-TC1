<?php
include "header.php";
include "handle_login.php";
include "handle-google-login.php";
?>

<html>
<div class="row m-5">
    <div class="col-2 m-5 ">
        <img src="assets/images//lodursoftware.png" alt="lodur logo" height="300" width="300">
    </div>
    <div class="col-8">
        <div class=" m-5  text-center">
            <div class="m-5 p-5">
                <h1><b>Sign In</b></h1>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                    <div class="m-3 p-2 text-end">
                        <div class="text-start">
                            <label for="email"><b>Email adress:</b></label>
                        </div>
                        <div>
                            <input type="email" name="emailAddress" class="w-100 signup-input" required>

                        </div>

                    </div>
                    <div class="m-3 p-2 text-end">
                        <div class="text-start">
                            <label for=""><b>Password:</b></label>
                        </div>

                        <div>
                            <input type="password" name="password" class="w-100 signup-input" required id="myInput">
                            <i class="bi bi-eye-slash" id="togglePassword" onclick="myFunction()" style="margin-left:-30px;cursor:pointer;"></i>
                        </div>


                    </div>

                    <div class="text-center">
                        <input type="submit" value="Login" class="btn btn-outline-info" name="login">
                    </div>
                    <div class="m-2 p-2">

                        <h3 class="border-1">or</h3>
                    </div>
                    <div class="m-2 p-2">
                        <div>
                            <div>
                                <button class="hollow button primary" onclick="window.location='<?php echo $login_url; ?>'" type="button">
                                    <img width="20px" alt="Google login" src="assets/images//Google__G__Logo.svg" />
                                    <b>Sign in with Google</b>
                                </button>
                            </div>
                        </div>
                        <div class="m-2 p-2">
                            <p>You dont have account <a href="signup.php">SIGN UP</a> </p>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>


<script>
    function myFunction() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    }
</script>
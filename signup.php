<?php
include "header.php";
include "handle_signup.php";
include "handle-google-login.php";
?>

<div class="row">
    <div class="col-3 m-3 p-3 text-center">
        <img src="assets/images//lodursoftware.png" alt="lodur logo" class="image1">
    </div>
    <div class="col-8">
        <div class="m-2 p-2 text-center 
">
            <html>
            <h1 class=""><b>Sign up</b></h1>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
                <div class="text-center form_section">
                    <div class="section text-end">
                        <div class="m-1 p-2">
                            <div class="text-start">
                                <label for="first_name"><b>First name :</b></label>

                            </div>
                            <div>
                                <input type="text" name="firstName" class="w-100 form-control rounded-pill signup-input">

                            </div>
                        </div>
                        <div class="m-1 p-2">
                            <div class="text-start">
                                <label for="second_name"><b>Second name :</b></label>

                            </div>
                            <div>
                                <input type="text" name="secondName" class="w-100 signup-input" required>

                            </div>
                        </div>
                        <div class="m-1 p-2">
                            <div class="text-start">
                                <label for="user_email"><b>Email :</b></label>

                            </div>
                            <div>
                                <input type="email" name="emailAddress" class="w-100 signup-input" required>

                            </div>
                        </div>
                        <div class="m-1 p-2">
                            <div class="text-start">
                                <label for=" password"><b>Password :</b></label>

                            </div>
                            <div>
                                <input placeholder="At least 8 values" type="password" name="password" class="w-100 signup-input" required>

                            </div>


                        </div>
                        <div class="m-1 p-2">
                            <div class="text-start">
                                <label for="user_confirm_password"><b>Confirm Password :</b></label>

                            </div>
                            <div>
                                <input placeholder="At least 8 values" type="password" name="confirmPass" class="w-100 signup-input" required>

                            </div>

                        </div>
                        <div class="text-center">
                            <input type="submit" value="Sign Up" class="btn btn-outline-info " name="register">
                        </div>
                        <div class="text-center">
                            <div class="m-1 p-2">

                                <h3 class="border-1">or</h3>
                            </div>
                            <div class="m-1 p-2">

                                <button class="hollow button primary " onclick="window.location='<?php echo $login_url; ?>'" type="button">
                                    <img width="20px" alt="Google login" src="assets/images/Google__G__Logo.svg" />
                                    <b>Sign in with Google</b>
                                </button>

                            </div>

                            <div class="m-1 p-2">
                                <p>Already a user <a href="index.php">LOGIN</a> </p>
                            </div>
                        </div>


                        </body>
                    </div>


            </html>

        </div>


    </div>

    </form>

</div>
</body>

</html>
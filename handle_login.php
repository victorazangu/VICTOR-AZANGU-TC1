<?php
include "config.php";

if (isset($_POST['login'])) {

    $userEmail = $_POST["emailAddress"];
    $userPassword = $_POST["password"];

     //comparing the data with the one in the database
    $sql = "SELECT * FROM `user` WHERE emailAddress='$userEmail'";

    $result = mysqli_query($link, $sql);

//if  query runs
    if ($result) {

        $data = mysqli_num_rows($result);


        if ($data == 1) {

            while ($row = mysqli_fetch_array($result)) {

                $ID = $row['ID'];
                $emailAddress = $row["emailAddress"];
                $password = $row["password"];
                $firstName = $row["firstName"];
                $user_type = $row['usertype'];
                // verify the password
                if (password_verify($userPassword, $password)) {
                                  
                // check for user type if its superadmin or just user
                    if ($row['usertype'] == '') {


                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $ID;
                        $_SESSION["username"] = $emailAddress;
                        $_SESSION['usertype'] == $user_type;

                        header("location:insert.php");
                    }
                    elseif ($row['usertype'] == 'admin') {

                        $_SESSION["loggedin"] = true;
                        $_SESSION["id"] = $ID;
                        $_SESSION["username"] = $emailAddress;
                        $_SESSION['usertype'] == $user_type;

                        header("location:superadmin.php");

                    }
                    else {
                        echo "Please ask superadmin to assign you a user type";
                    }
                }
                else {
                    echo "Wrong password!";
                }

            }
        }
        else {
            echo "No such email address found";

        }
    }


}

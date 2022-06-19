<?php




include "header.php";

include "config.php";



if (isset($_POST["update"])) {
    $ID = $_POST["ID"];
    $up_Name = $_POST["name"];
    $up_firstName = $_POST["firstName"];
    $up_email = $_POST["email"];
    $up_street = $_POST["street"];
    $up_zipCode = $_POST["zipCode"];
    $up_city = $_POST["city"];


    $up_sql = "UPDATE `user_data` SET `name`='$up_Name',`firstName`='$up_firstName ',`email`='$up_email',`street`='$up_street',`zipCode`='$up_zipCode',`city`='$up_city'  WHERE ID ='$ID'";

    $up_result = mysqli_query($link, $up_sql);

    if ($up_result) {

        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-success'>Records have been updated!</p>";
        echo "<a class='btn btn-primary col-md-4' href='view.php'>BACK</a>";
        echo "</div>";
    } else {
        echo "Error executing query $up_sql" . mysqli_error($link);
    }
} else {

    if (isset($_GET["ID"]) and !empty($_GET["ID"])) {

        $ID = $_GET["ID"];

        $sql = "SELECT * FROM `user_data` WHERE ID='$ID'";

        $result = mysqli_query($link, $sql);

        if ($result) {

            $data = mysqli_num_rows($result);

            if ($data == 1) {

                $row = mysqli_fetch_array($result);

                $name = $row["name"];
                $firstName = $row["firstName"];
                $email = $row['email'];
                $street = $row["street"];
                $zipCode = $row["zipCode"];
                $city = $row["city"];


?>
                <div class="row m-2">
                    <div class="text-primary h3">Update the Record</div>
                </div>
                <div class="row m-2">
                    <div class="card">
                        <div class="card-body">
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">
                                <div class="row p-2">
                                    <div class="col-md-12">
                                        <label class="form-label grey">Name</label>
                                        <input class="form-control" type="text" name="name" value="<?php echo $name; ?>">
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-12">
                                        <label class="form-label grey">First Name</label>
                                        <input class="form-control" type="text" name="firstName" value="<?php echo $firstName; ?>">
                                    </div>

                                </div>
                                <div class="row p-2">
                                    <div class="col-md-12">
                                        <label class="form-label grey">Email</label>
                                        <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-12">
                                        <label class="form-label grey">Street</label>
                                        <input class="form-control" type="text" name="street" value="<?php echo $street; ?>">
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-12">
                                        <label class="form-label grey">zip Code</label>
                                        <input class="form-control" type="number" name="zipCode" value="<?php echo $zipCode; ?>">
                                    </div>
                                </div>
                                <div class="row p-2">
                                    <div class="col-md-12">
                                        <label class="form-label grey">City</label>
                                        <input class="form-control" type="text" name="city" value="<?php echo $city; ?>">
                                    </div>
                                </div>
                                <div>
                                    <input type="hidden" name="ID" value="<?php echo $_GET["ID"]; ?>">
                                </div>

                                <div class="row p-2">
                                    <div class="col-md-12">

                                        <input class="btn btn-primary col-md-4" type="submit" name="update" value="UPDATE">
                                        <a class="btn btn-danger" href="insert.php">BACK</a>

                                    </div>

                                </div>


                            </form>


                        </div>
                    </div>
                </div>
                </body>
<?php

            } else {
                echo "No record was found";
            }
        } else {
            echo "error executing query $sql" . mysqli_error($link);
        }
    } else {
        echo "id value not picked";
    }
}


?>
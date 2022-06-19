<?php

include "backend/config.php";
include "header.php";
session_start();

$sql = "SELECT * FROM `user_data` ";
#execute query
$result = mysqli_query($link, $sql);

#check
if ($result) {
    $data = mysqli_num_rows($result);
    #is there data here?
    if ($data > 0) {


        while ($row = mysqli_fetch_array($result)) {


            $ID = $row['ID'];
            $name = $row["name"];
            $firstName = $row["firstName"];
            $email = $row["email"];
            $street = $row["street"];
            $zipCode = $row["zipCode"];
            $city = $row["city"];
        }
    }
}

if (isset($_POST["submit_delete"]) and !empty($_POST["ID"])) {
    $ID = $_POST["ID"];
    $sql_delete = "DELETE FROM `user_data` WHERE ID='$ID' ";
    $result = mysqli_query($link, $sql_delete);





    if ($result) {
        echo "<div class='row m-2 text-center'>";
        echo "<p class='alert alert-danger'>Record deleted Successfully</p>";
        echo "</div>";
        header('location:view.php');
    } else {
        echo "Error executing query $sql" . mysqli_error($link);
    }
} else {
}

?>


<body>
    <div class="container">


        <div class="row m-2">
            <div class="alert alert-warning">

                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
                    <div class="p-2 text-center">
                        <label class="form-label">Are you sure you want to delete this record?</label> <br>
                        <input type="hidden" name="ID" value="<?php echo $_GET['ID']; ?>">
                    </div>
                    <div class="p-2 text-center">
                        <input type="submit" name="submit_delete" value="YES" class="btn btn-danger col-md-3">
                        <a href="view.php" class="btn btn-primary col-md-3">NO</a>
                    </div>
                </form>

            </div>
        </div>

    </div>
</body>

</html>
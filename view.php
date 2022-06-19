<?php

include "config.php";
include "header.php";
include "google-api/vendor/autoload.php";
include "handle-google-login.php";

?>
<div class="body_view">
    <div class="row text-center m-3 p-3 ">
        <div class="row">
            <div class="col-3 text-start ">
                <i class="fa fa-user-circle-o fa-2x"></i>
                <span CLASS="h4 "><?php echo $_SESSION['lastname']; ?> </span><br>
                <i class="fa fa-envelope fa-2x"></i>
                <span CLASS="h4 "><?php echo $_SESSION['email']; ?> </span>
            </div>
            <div class="col-6">
                <a href="insert.php" class="btn btn-outline-primary">insert records in database</a>

            </div>
            <div class="col-2">
                <a href="logout.php" class="btn btn-outline-danger "><b>LOGOUT</b></a>
            </div>
        </div>
        <div class="row ">

            <div class="col border-1">
                <?php
                $sql = "SELECT * FROM `user_data`";
                if ($result = mysqli_query($link, $sql)) {
                    $rowcount = mysqli_num_rows($result);
                    echo "<h4><b>";
                    echo "Total records is: " . $rowcount;
                    echo "</b></h4>";
                }
                ?>
            </div>
        </div>

    </div>

    <?php
    //selecting data from the database
    $sql = "SELECT * FROM `user_data`";
    #execute query
    $result = mysqli_query($link, $sql);

    #check
    if ($result) {
        $data = mysqli_num_rows($result);
        #is there data here?
        if ($data > 0) {
    ?>
            <table class="table table-strip m-3 p-2 text-center">
                <tr>
                    <th>#</th>
                    <th>NAME</th>
                    <th>FIRST NAME</th>
                    <th>EMAIL ADDRESS</th>
                    <th>STREET</th>
                    <th>ZIP CODE</th>
                    <th>CITY</th>
                    <th>DELETE</th>
                    <th>UPDATE</th>
                </tr>



                <?php

                while ($row = mysqli_fetch_array($result)) {
                    $ID = $row['ID'];
                    $name = $row["name"];
                    $firstName = $row["firstName"];
                    $email = $row["email"];
                    $street = $row["street"];
                    $zipCode = $row["zipCode"];
                    $city = $row["city"];
                ?>
                    <tr>
                        <td>
                            <?php echo $ID ?>
                        </td>
                        <td>
                            <?php echo $name ?>
                        </td>
                        <td>
                            <?php echo $firstName ?>
                        </td>
                        <td>
                            <?php echo $email ?>
                        </td>
                        <td>
                            <?php echo $street ?>
                        </td>
                        <td>
                            <?php echo $zipCode ?>
                        </td>
                        <td>
                            <?php echo $city ?>
                        </td>
                        <td>
                            <a href="delete.php?ID=<?php echo $ID  ?>"><span class='fa fa-trash'></span></a>
                        </td>
                        <td>
                            <a href="update.php?ID=<?php echo $ID  ?>"><span class='fa fa-refresh'></span></a>
                        </td>
                    </tr>

                <?php
                }
                ?>
            </table>
</div>
</body>
<?php
        } else {
            echo "no records were found in your database!";
        }
    }
?>
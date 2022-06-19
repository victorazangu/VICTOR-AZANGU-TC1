<?php
include "header.php";
include "handle_login.php";
include "google-api/vendor/autoload.php";
include "handle-google-login.php";

$sql = "SELECT * FROM `user` WHERE ID ='$ID' ";
#execute query
$result = mysqli_query($link, $sql);

#check
if ($result) {
    $data = mysqli_num_rows($result);
    #is there is user 
    if ($data == 1) {

        $row = mysqli_fetch_array($result);
        $ID = $row["ID"];
        $firstName = $row["firstName"];
        $email =  $row["emailAddress"];
    }
}

?>



<div>
    <div class="row ">
        <div class="row">
            <div class="col-2">
                <h1><b>ADMIN</b></h1>
            </div>

            <div class="col-3 text-start">
                <i class="fa fa-user-circle-o fa-2x text-start "></i>
                <span CLASS="h4 text-start"><?php echo $row["firstName"]; ?> </span><br>
                <i class="fa fa-envelope fa-2x text-start"></i>
                <span CLASS="h4 text-start"><?php echo $row["emailAddress"]; ?> </span>
            </div>
            <div class="col-7">
                <div class="row">
                    <div class="col-3">
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
                    <div class="col-3">
                        <?php
                        $sql = "SELECT * FROM `user`";
                        if ($result = mysqli_query($link, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo "<h4><b>";
                            echo "* Email users : " . $rowcount;
                            echo "</b></h4>";
                        }
                        ?>
                    </div>
                    <div class="col-3">
                        <?php
                        $sql = "SELECT * FROM `gusers`";
                        if ($result = mysqli_query($link, $sql)) {
                            $rowcount = mysqli_num_rows($result);
                            echo "<h4><b>";
                            echo "* google users : " . $rowcount;
                            echo "</b></h4>";
                        }
                        ?>
                    </div>
                    <div class="col-3">
                        <div class="col-4">
                            <a href="logout.php" class="btn btn-outline-danger "><b>LOGOUT</b></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col">

            <body class="m-3 p-3 ">

                <h1 class="text-center">Insert the details in fill database</h1>

                <form action="<?php
                                echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" class="m-2 p-2 text-center">
                    <div class="m-2 p2">
                        <div class="m-2 p2">
                            <label for="name">
                                <h4><b>Name:</b></h4>
                            </label>
                            <input type="text" name="name" required class="w-75">
                        </div>
                        <div class="m-2 p2">
                            <label for="firstName">
                                <h4><b>First Name:</b></h4>
                            </label>
                            <input type="text" name="firstName" required class="w-75">
                        </div>
                        <div class="m-2 p2">
                            <label for="email">
                                <h4><b>Email:</b></h4>
                            </label>
                            <input type="email" name="email" required class="w-75">
                        </div>
                        <div class="m-2 p2">
                            <label for="street">
                                <h4><b>Street:</b></h4>
                            </label>
                            <input type="address" name="street" required class="w-75">
                        </div>
                        <div class="m-2 p2">
                            <label for="zip-code">
                                <h4><b>Zip Code:</b></h4>
                            </label>
                            <input type="number" name="zipCode" required class="w-75">
                        </div>
                        <div class="m-2 p2">
                            <label for="city">
                                <h4><b>City:</b></h4>
                            </label>
                            <select name="city" id="" class="form-selected">
                                <option value="Nairobi">Nairobi</option>
                                <option value="Mombasa">Mombasa</option>
                                <option value="Kisumu">Kisumu</option>
                                <option value="Eldoret">Eldoret</option>
                                <option value="Nakuru">Nakuru</option>
                                <option value="Kakamega">Kakamega</option>
                                <option value="Meru">Meru</option>
                                <option value="Maralal">Maralal</option>
                                <option value="Malindi">Malindi</option>
                                <option value="Kitale">Kitale</option>
                                <option value="Thika">Thika</option>
                                <option value="Machakos">Machakos</option>
                                <option value="Garissa">Garissa</option>
                                <option value="Voi">Voi</option>
                                <option value="Isiolo">Isiolo</option>
                                <option value="Busia">Busia</option>
                                <option value="Webuye">Webuye</option>
                                <option value="Nyahururu">Nyahururu</option>
                                <option value="Arthi River">Arthi River</option>
                                <option value="Kapsabet">Kapsabet</option>
                                <option value="Mumias">Mumias</option>
                                <option value="Lodwar">Lodwar</option>
                                <option value="Homa bay">Homa bay</option>
                                <option value="Narok">Narok</option>
                                <option value="Nandi Hills">Nandi Hills</option>
                                <option value="Marsabit">Marsabit</option>
                                <option value="Nanyuki">Nanyuki</option>
                                <option value="Limuru">Limuru</option>
                                <option value="Wajir">Wajir</option>
                                <option value="Taveta">Taveta</option>
                                <option value="Rumuruti">Rumuruti</option>
                                <option value="Lamu">Lamu</option>
                                <option value="Ol Kalau">Ol Kalau</option>
                                <option value="Kericho">Kericho</option>
                                <option value="Bungoma">Bungoma</option>
                                <option value="Kiambu">Kiambu</option>
                                <option value="Iten">Iten</option>
                                <option value="Kapenguria">Kapenguria</option>
                                <option value="Naivasha">Naivasha</option>
                                <option value="Nyeri">Nyeri</option>
                                <option value="Kisii">Kisii</option>
                                <option value="Kikuyu">Kikuyu</option>
                                <option value="Molo">Molo</option>
                                <option value="Bondo">Bondo</option>
                                <option value="Kahencha">Kahencha</option>
                                <option value="Mandera">Mandera</option>
                                <option value="Eldama Ravine">Eldama Ravine</option>
                                <option value="Maua">Maua</option>
                                <option value="Mariakani">Mariakani</option>
                                <option value="Oyugis">Oyugis</option>
                                <option value="Malaba">Malaba</option>
                            </select>
                        </div>
                        <div class="m-2 p2 row text-center">
                            <div class="col">
                                <input type="reset" name="reset" class="w-50 reset">

                            </div>
                            <div class="col">
                                <input type="submit" name="submit" class="w-50 submit">
                            </div>
                        </div>
                    </div>


                </form>

        </div>

        <div class="col">

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
    </div>
</div>
</div>

</div>


<div>
    <div class="row text-center mt-5">
        <div class="col  ">
            <div>
                <a href="view.php" class="btn btn-outline-info w-75 a">update record in database</a>
            </div>
        </div>
        <div class="col ">
            <div>
                <a href="view.php" class="btn btn-outline-info w-75 a">view records in database</a>
            </div>
        </div>
        <div class="col  ">
            <div>
                <a href="view.php" class="btn btn-outline-info w-75 a">delete record in database</a>
            </div>
        </div>
    </div>
</div>
</body>